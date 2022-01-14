<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use function redirect;
use function view;

class CategoryController extends Controller
{

    public function index(CategoriesDataTable $dataTable){

        return $dataTable->render('admin.Category.index');
    }
    public function create()
    {
        return view('admin.Category.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = Category::Create([
            'name' => $request->name,
        ]);
        return redirect(route('categories.all'))->with('success', 'Category Added Successfully!');
    }
    public function edit(Request $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->first();
        return view('admin.Category.edit', compact('data'));
    }
    public function update (CategoryRequest $request,$id)
    {
        $data = Category::findOrFail($id);
        $data = $data->update([
            'name' => $request->name,
        ]);
        return redirect(route('categories.all'))->with('success', 'Category updated Successfully!');
    }

    public function destroy($id)
    {
        $exist = Course::where('cat_id',$id)->first();
        if($exist){
            return back()->with('danger','Delete Courses with this Category First');
        }else{
        $data = Category::findOrFail($id);
        $data->delete();
            }
        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
    public function status(Request $request){
        Category::where('id', $request->id)->update([
            'active' => $request->active
        ]);
    }

}
