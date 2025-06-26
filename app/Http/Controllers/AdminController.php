<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function addNewCategory(Request $request){
        
        $validator = Validator::make(
            $request->all(),
            [
                'category_name' => 'required | min:4',
                'category_img' => 'required | mimetype:jpg,png,jpeg'
            ]
        );

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return $request;

    }
}
