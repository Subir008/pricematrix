<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin url

Route::prefix('admin')->group(function(){
    
    Route::view('login', 'back-end.login')->name('login');
    Route::view('dashboard', 'back-end/dashboard')->name('dashboard');
    Route::view('products', 'back-end.products')->name('products');
    Route::view('add-new-products', 'back-end.add-new-products')->name('add-products');
    Route::view('category-list' , 'back-end.category-list')->name('category-list');
    Route::view('add-new-category', 'back-end.add-new-categories')->name('add-new-categories');
    
    Route::post('login', [AdminController::class , "login"])->name('login');
    Route::get('logged_out' , [AdminController::class , 'logged_out'] )->name('logout');

});