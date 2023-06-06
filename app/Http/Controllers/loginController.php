<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function processForm(Request $request)
    {
        // Process the form data
        $name = $request->input('user');
        $email = $request->input('pass');

        // Perform any necessary operations or validations with the data

        // Redirect or return a response
        return redirect('/home');
    }
}
