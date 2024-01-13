<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function value(Request $request)
    {
        $validateData = $request-> validate([
            'Full_Name' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Zip_Code' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'user_id' => 'required',
        ]);
        Address::create($validateData);

        return redirect('/profile')->with('success', 'Address added successfully.');
    }

}
