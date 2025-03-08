<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin url

Route::prefix('admin')->group(function(){
    
    Route::view('dashboard', 'back-end/dashboard')->name('dashboard');
    Route::view('login', 'back-end.login')->name('login');
    
    Route::post('login', [AdminController::class , "login"])->name('login');

    Route::get('logged_out' , [AdminController::class , 'logged_out'] )->name('logout');

});