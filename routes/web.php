<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('teachers', TeacherController::class);
Route::get('teachers/{teacher}/confirmDelete', [TeacherController::class, 'confirmDelete'])->name('teachers.confirmDelete');
