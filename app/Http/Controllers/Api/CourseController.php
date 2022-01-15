<?php

namespace App\Http\Controllers\Api;

use App\Events\ViewsEvent;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClientRating;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $data = Course::where('active', '1')->with('Category')->paginate(PAGINATION_COUNT);
        return msgdata($request, success(), 'All Courses', $data);
    }

    public function view(Request $request, $id)
    {
        $data = Course::with('Category')->findorfail($id);
        event(new ViewsEvent($data));
        return msgdata($request, success(), 'Course show', $data);
    }

    public function rateCourse(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'course_id' => 'required|exists:courses,id|',
            'comment' => 'required|string',
            'rate' => 'required|numeric|max:5|min:0',
        ]);
        if ($validator->fails()) {
            return msgdata($request, failed(), $validator->messages()->first(), (object)[]);
        }
        $id = auth()->guard('api')->user()->id;

        $once = ClientRating::where('client_id', $id)->where('course_id', $request->course_id)->first();
        if ($once) {
            return msg($request, success(), 'Sorry,you have Rate Befor ');
        } else
            ClientRating::where('client_id', $id)->create([
                'client_id' => $id,
                'course_id' => $request->course_id,
                'comment' => $request->comment,
                'rate' => $request->rate,
            ]);

        $sum = ClientRating::where('course_id', $request->course_id)->sum('rate');
        $count = ClientRating::where('course_id', $request->course_id)->count();
        $rate = number_format((float)$sum / $count, 1);

        Course::where('id', $request->course_id)->update(['rating' => $rate]);

        return msg($request, success(), ' Done, You have Rate for this Course');

    }

}
