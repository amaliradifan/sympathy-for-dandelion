<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function addPayment(Request $request)
    {
        $validateData = $request-> validate([
            'user_id'=>'required',
            'Amount'=>'required',
            'Type'=>'required',
        ]);
        Payment::create($validateData);

        return redirect('/')->with('success', 'Add added successfully.');
    }
}
