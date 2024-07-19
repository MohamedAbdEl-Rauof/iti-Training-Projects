<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;

class UserRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_registrations|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        UserRegistration::create($validatedData);

        return redirect()->route('register')->with('success', 'Registration successful!');
    }
}
