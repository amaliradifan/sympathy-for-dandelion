<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)){
            $request -> session() -> regenerate();  
            return redirect()->intended('/')->with('loginSuccess', "Welcome Back <b>$request->username</b>!! Happy Shopping!");
        }

        return back()->withInput()->withErrors(['loginErr' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

    
}
