<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// admin url

Route::middleware('logincheck')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/login' , [ViewController::class, 'login'])->name('login');
        Route::view('/login', 'back-end.login')->name('login');
        Route::post('/login' , [AdminLoginController::class , 'login'])->name('login');
    });
});

Route::middleware('guestcheck')->group(function() {
    Route::prefix('admin')->group(function(){
        
        // Loading the pages
        Route::controller(ViewController::class)->group(function(){
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('products', 'products')->name('products');
            Route::get('add-new-products', 'addNewProducts')->name('add-products');
            Route::get('category-list' , 'categoryList')->name('category-list');
            Route::get('add-new-category', 'addNewCategory')->name('add-new-categories');
        });

        Route::controller(AdminController::class)->group(function(){
            Route::post('/add-category' , 'addNewCategory')->name('addNewCategory');
        });
        
        Route::get('logged_out' , [AdminLoginController::class , 'logged_out'] )->name('logout');
        
    });
});