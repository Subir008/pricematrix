<?php

namespace App\Http\Controllers;

use App\Models\Product_category_master;
use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // Adding new category 
    public function addNewCategory(Request $request){

        // Check the input data
        $validator = Validator::make(
            $request->all(),
            [
                'category_name' => 'required | min:4',
                'category_image' => 'required',
                'category_icon' => 'required'
            ]
        );
        // If any error in filling the form
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // Getting the file
        $image = $request->file('category_image') ;
        // Storing the original file extension
        $ext = $image->getClientOriginalExtension();
        // Original file name 
        $originalNameArray = explode('.' , $image->getClientOriginalName()) ;
        // Creating new name for the file
        $imageName =$originalNameArray[0]. time() . '.' . $ext;
        
        // Folder path
        $filePath = public_path('/assets/category_img');
        //Upload the file
        $image->move( $filePath , $imageName );

        // Storing the current Date
        $currentDate = now()->toDateString();

        $data = Product_category_master::create(
            [
            'category_name' => $request->category_name,
            'category_img' => $imageName,
            'category_icon' => $request->category_icon,
            'category_date' => $currentDate
        ]
        );

        if(! $data)
        {
            return back()->with('category_add_failed' , 'Failed to Add Category');
        }
        
        return back()->with('category_add_success','Category Added Successfully');
    }

    public function deleteCategory(int $id){

        // Check if the id is existed or not
        $category_id_exist = Product_category_master::where('category_id' , $id)->exists();
        if( $category_id_exist){
            // Delete the category list data if it exists 
            Product_category_master::destroy($id);

            return back()->with('delete_success','Category Deleted Successfully ....');

        }else{
            return back()->with('delete_failure', 'Couldnot Delete the Category ... ');
        }
        

    }
}
