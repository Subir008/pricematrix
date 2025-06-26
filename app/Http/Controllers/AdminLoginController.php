<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminLoginController extends Controller
{
    // Login logic
    public function login(Request $request){
        $validator= Validator::make( 
            $request->all(),
            [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        # If validations fail, show the error
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

        # If credentials match
        if($request->email == 'admin@gmail.com' && $request->password == 'admin'){
            $user = User::where('email' , 'admin@gmail.com')->first();

            # For the first time Admin login setting the login credentials to the db.
            if(! $user){
                $name = 'Admin';
                $email = 'admin@gmail.com';
                $password = bcrypt('admin');

                User::insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                ]);
            }

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $token = Auth::user()->createToken('login')->plainTextToken;
                $request->session()->flash('success' , 'Login Successful');
                $request->session()->put('loggedin' , $token);
                // $request->withCookie('PMAL' , "ss");
                // $request->setcookie('PMALd',"dd", time()+60*60*34*30);
                // echo $token;
                return to_route('dashboard');
            }
        }else{
            $request->session()->flash('failed', 'Credentials Not Match');
            return to_route('login');
        }
    }

    // Logout logic
    public function logged_out(Request $request){
        $request->session()->pull('loggedin');
        $request->session()->flash('logout' , 'Logout Successfull');
        return to_route('login');
    }
}
