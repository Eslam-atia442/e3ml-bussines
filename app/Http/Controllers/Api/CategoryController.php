<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::where('active','1')->paginate(PAGINATION_COUNT);
        return msgdata($request, success(), 'All Categories', $data);
    }
}
