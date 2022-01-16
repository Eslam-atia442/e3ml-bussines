<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('signout');
Route::get('/',[FrontController::class, 'front'] );
Route::get('/front/filter/{type}/{search}/{id}',[FrontController::class, 'filter'] );

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
    Route::group(['namespace' => 'admin', 'prefix' => 'categories'], function () {
        Route::get('/all', [CategoryController::class, 'index'])->name('categories.all');
        Route::get('/newCategory', [CategoryController::class, 'create'])->name('categories.add');
        Route::post('/saveCategory', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/EditCategory/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/updateCategory/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
        Route::post('/statusCategory', [CategoryController::class, 'status'])->name('categories.status');

    });

    Route::group(['namespace' => 'admin', 'prefix' => 'courses'], function () {
        Route::get('/all', [CourseController::class, 'index'])->name('courses.all');
        Route::get('/newCourse', [CourseController::class, 'create'])->name('courses.add');
        Route::post('/saveCourse', [CourseController::class, 'store'])->name('courses.store');
        Route::get('/EditCourse/{id}', [CourseController::class, 'edit'])->name('courses.edit');
        Route::post('/updateCourse/{id}', [CourseController::class, 'update'])->name('courses.update');
        Route::get('/viewCourse/{id}', [CourseController::class, 'view'])->name('courses.view');
        Route::get('/deleteCourse/{id}', [CourseController::class, 'destroy'])->name('courses.delete');
        Route::post('/statusCourse', [CourseController::class, 'status'])->name('courses.status');
    });

});











