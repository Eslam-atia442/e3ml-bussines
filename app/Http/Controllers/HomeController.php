<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function front()
    {
       $category= Category::paginate(PAGINATION_COUNT);
        $data= Course::with('Category')->paginate(PAGINATION_COUNT);
        return view('task',compact('data','category'));
    }
    public function index()
    {
        return view('home')->with('success', 'Done');
    }


}
