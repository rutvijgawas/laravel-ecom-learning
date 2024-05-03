<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use Session;
use Hash;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
     
        $user = User::where('email', $request->email)->first();
       
        if (!$user || !Hash::check($request->password, $user->password)) {
            
           return back()->withErrors('error', 'Username or Password is not matched');
        }


        
        $request->session()->put('user', $user);
        $request->session()->put('LoggedUser', 1);


        return redirect('/')->with('message', 'Login successfully');
    }


    function logout(Request $request)
    {
   
        Session::flush(); 
        return redirect('/login');
    }
}
