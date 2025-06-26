<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //Login page rediect
     public function login(){
        return view('back-end.login');
    }

    // Dashboard page redirect
    public function dashboard(){
        return view('back-end.dashboard');
    }

    public function products(){
        return view('back-end.products');
    }

    // Add new products page redirect
    public function addNewProducts(){
        return view('back-end.add-new-products');
    }

    // Category list page redirect
    public function categoryList(){
        return view('back-end.category-list');
    }

    // Add new category page redirect
    public function addNewCategory(){
        return view('back-end.add-new-categories');
    }
}
