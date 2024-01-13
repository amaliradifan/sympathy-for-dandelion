<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email(Request $request){
        $validateData = $request-> validate([
            
            'email'=>'required|min:5|max:30']);

            Email::create($validateData);

            return redirect()->back()->with('success', 'Email has been stored successfully');

    }
}
