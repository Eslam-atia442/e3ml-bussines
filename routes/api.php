<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

});

    Route::group(['middleware' => ['jwt.verify']], function () {
        Route::get('auth/logout', [AuthController::class, 'logout']);
        //Courses
        Route::get('allCourses', [CourseController::class, 'index']);
        Route::get('viewCourse/{id}', [CourseController::class, 'view']);
        Route::post('rateCourse', [CourseController::class, 'rateCourse']);
        //Categories
        Route::get('allCategories', [CategoryController::class, 'index']);
});

