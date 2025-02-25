<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin url
Route::view('admin/dashboard', 'back-end/dashboard')->name('dashboard');