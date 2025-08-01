<?php

namespace App\Http\Controllers;

use App\Models\Product_category_master;
use App\Models\Product_subcategory_master;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //Login page rediect
    public function login()
    {
        return view('back-end.login');
    }

    // Dashboard page redirect
    public function dashboard()
    {
        return view('back-end.dashboard');
    }

    public function products()
    {
        return view('back-end.products');
    }

    // Add new products page redirect
    public function addNewProducts()
    {
        return view('back-end.add-new-products');
    }

    // Category list page redirect
    public function categoryList()
    {
        $data = Product_category_master::all();
        return view('back-end.category-list', ['data' => $data]);
    }

    // Add new category page redirect
    public function addNewCategory()
    {
        return view('back-end.add-new-categories');
    }

    // Add new Subcategory page 
    public function addNewSubCategory()
    {
        $productData = Product_category_master::all();
        return view('back-end.add-new-subcategories', ['data' => $productData]);
    }

    // Subcategory list page redirect
    public function subcategoryList()
    {
        // Using One to Many inverse relationship to join the table and fetch both table data
        $data = Product_subcategory_master::with('categoryData')->get();

        return view('back-end.subcategory-list', ['data' => $data]);
    }
}
