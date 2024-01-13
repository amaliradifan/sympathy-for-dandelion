<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function store(Request $request){
        $validateData = $request-> validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|min:5|max:30',
            'password'=>'required|min:5|max:30']);

            User::create($validateData);

        return redirect('/signin');
    }
}
