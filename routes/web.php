<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main.maindb');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('main',MainController::class);
Route::resource('student',StudentController::class);
Route::resource('course',CourseController::class);
Route::resource('teacher',TeacherController::class);
