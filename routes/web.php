<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    $courses = Course::all();
        // return $courses;
    return view('welcome', compact('courses'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
