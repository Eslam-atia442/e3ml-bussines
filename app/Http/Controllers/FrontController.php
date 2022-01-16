<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function front()
    {
       $category= Category::get();
        $data= Course::with('Category')->get();
        return view('front.front',compact('data','category'));
    }
    public function filter($type , $search,$id)
    {
        $query  = Course::query();
        $category  = Category::query();
        if($type == 'text'){
            if($search != 'null'){
                $query =  $query->where('name', 'like', '%' . $search . '%');
            }
        }
        if($type == 'category'){
            if($search != 'null'){
                $query =  $query->where('cat_id', $id);
            }
        }
        if($type == 'stars'){
            if($search != 'null'){
                $query =  $query->where('rating', $id);
            }
        }
        if($type == 'level'){
            if($search != 'null'){
                $query =  $query->where('levels', $id);
            }
        }
        if($type == 'time'){
            if($search != 'null'){
               if ( $id=='4' || $id=='8' )
               { $query =  $query->where('hours','<', $id);}
               else
                   $query =  $query->where('hours','>', '8');
            }
        }
        $data = $query->paginate(10);
        return view('front.parts.course_items',compact('data'));
    }

}
