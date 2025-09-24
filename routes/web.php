<?php

use Illuminate\Support\Facades\Route;

// Saya bantuan Ai buat nambahin ini dan install controller studentnya
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('students.form');
});

Route::get('/student', function () {
    return view('students.student');
});
