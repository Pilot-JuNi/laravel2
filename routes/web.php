<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\KurseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('teachers', TeacherController::class);
Route::get('teachers/{teacher}/confirmDelete', [TeacherController::class, 'confirmDelete'])->name('teachers.confirmDelete');

// resource routes for courses (all RESTful actions)
// The controller already implements create, store, show, edit, update, destroy
// so we register the full resource to provide named routes such as kurse.create
Route::resource('kurse', KurseController::class);
