<?php

namespace App\Http\Controllers;

use App\Models\Product_category_master;
use App\Models\Product_subcategory_master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    // Adding new subcategory 
    public function addNewSubCategory(Request $request){ 

        // Check the input data
        $validator = Validator::make(
            $request->all(),
            [
                'subcategory_name' => 'required | min:4',
                'subcategory_image' => 'required',
                'category_name' => 'required'
            ]
        );
        // If any error in filling the form
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // Store the name
        $subcategory_name = $request->subcategory_name;
        // Convert it into lower case
        $name = strtolower($subcategory_name);
        // Modify the name
        $subcategory_hidden_name = str_replace(' ', '_' , $name);

        // Getting the file
        $image = $request->file('subcategory_image') ;
        // Storing the original file extension
        $ext = $image->getClientOriginalExtension();
        // Original file name 
        $originalNameArray = explode('.' , $image->getClientOriginalName()) ;
        // Creating new name for the file
        $imageName =$originalNameArray[0]. time() . '.' . $ext;
        
        // Folder path
        $filePath = public_path('/assets/subcategory_img');
        //Upload the file
        $image->move( $filePath , $imageName );

        // Storing the current Date
        $currentDate = now()->toDateString();

        $data = Product_subcategory_master::create(
            [
            'subcategory_name' => $request->subcategory_name,
            'subcategory_hidden_name' => $subcategory_hidden_name,
            'subcategory_img' => $imageName,
            'category_name' => $request->category_name,
            'subcategory_date' => $currentDate
        ]
        );

        if(! $data)
        {
            return back()->with('subcategory_add_failed' , 'Failed to Add Subcategory');
        }
        
        return back()->with('subcategory_add_success','Subcategory Added Successfully');
    }

    // Delete Subcategory
    public function deleteSubCategory(Request $request){
        // Check data is exist or not
        $categoryDataExists = Product_subcategory_master::where( 'subcategory_id',$request->subcategory_id)->exists();
        if($categoryDataExists){
            // Fetch the data
            $categoryData = Product_subcategory_master::where( 'subcategory_id',$request->subcategory_id)->get();
            // Fetch the image name
            $img = $categoryData[0]->subcategory_img;
            // Check the image data is present or not
            if($img != "" || $img != null){
                // Unlink the image from the folder 
                unlink('assets/subcategory_img/'.$img);
            }
            // Delete the data from db
            Product_subcategory_master::where('subcategory_id',$request->subcategory_id)->delete();
            return back()->with('success','Subcategory deleted successfully ....');
        }else{
            return back()->with('failed',"Data can't be deleted !!!!" );
        }
    }

}
