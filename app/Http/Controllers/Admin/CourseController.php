<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CoursesDataTable;
use App\Events\ViewsEvent;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function index(CoursesDataTable $dataTable)
    {

        return $dataTable->render('admin.Course.index');
    }

    public function create()
    {
        $data = Category::select('id', 'name')->get();
        return view('admin.Course.create', compact('data'));
    }

    public function store(CourseRequest $request)
    {
        $data = Course::Create([
            'name' => $request->name,
            'hours' => $request->hours,
            'cat_id' => $request->cat_id,
            'levels' => $request->levels,
            'description' => $request->description,
            'image' =>  $request->image,
        ]);
        return redirect(route('courses.all'))->with('success', 'Course Added Successfully!');
    }

    public function edit($id)
    {
        $categories = Category::select('id', 'name')->get();
        $data = Course::findOrFail($id);
        $data->first();
        return view('admin.Course.edit', compact('data','categories'));
    }

    public function update(CourseRequest $request, $id)
    {
        $data = Course::findOrFail($id);
        $data = $data->update([
            'name' => $request->name,
            'hours' => $request->hours,
            'cat_id' => $request->cat_id,
            'levels' => $request->levels,
            'description' => $request->description,
            'image' =>  $request->image,
        ]);
        return redirect(route('courses.all'))->with('success', 'Course updated Successfully!');
    }

    public function view($id)
    {
        $data = Course::findOrFail($id);
        return view('admin.Course.view', compact('data'));
    }

    public function destroy($id)
    {
        $data = Course::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Course Deleted Successfully!');
    }

    public function status(Request $request){
        Course::where('id', $request->id)->update([
            'active' => $request->active
        ]);
    }
}
