<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
    //
    public function login(Request $request){
        $validator= Validator::make( 
            $request->all(),
            [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            $error = $validator->errors();
            if($error){
                $name = $error->first('email');
                $password = $error->first('password');
            }
            $request->session()->flash('name', $name );
            $request->session()->flash('password', $password );            
            return back()->withInput();
        }

        if($request->email == 'admin@gmail.com' && $request->password == 'admin'){
            $user = Auth::user();
            // return response()->json([
            //     'status' => true,
            //     'message' => 'Login Successfull',
            //     // 'token' => $user->createToken('login')->plainTextToken
            // ])->to_route('dashboard'); 
            $request->session()->flash('success' , 'Login Successful');
            $request->session()->put('loggedin' , 'true');
            return to_route('dashboard');
        }else{
            $request->session()->flash('failed', 'Credentials Not Match');
            return to_route('login');
        }

    }

    public function logged_out(Request $request){
        $request->session()->pull('loggedin');
        $request->session()->flash('logout' , 'Logout Successfull');
    }
}
