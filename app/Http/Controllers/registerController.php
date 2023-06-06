<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function view()
    {
        return view('register', [
            'current' => 'Register'
        ]);
    }

    public function processForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'pass' => 'required|min:8|confirmed',
            'pass_confirmation' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Form data is valid, continue processing

        // Redirect or return a response
        return redirect('/register/complete');
    }

    public function selesai(){
        return view('completeRegister', [
            'current' => 'Register'
        ]);
    }
}
