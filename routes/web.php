<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\KurseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('teachers', TeacherController::class);
Route::get('teachers/{teacher}/confirmDelete', [TeacherController::class, 'confirmDelete'])->name('teachers.confirmDelete');

// resource route for courses
Route::resource('kurse', KurseController::class)->only(['index']);
