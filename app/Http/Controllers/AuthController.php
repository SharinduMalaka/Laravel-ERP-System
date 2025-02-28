<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Handle user registration
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:customers,email',
        'password' => 'required|min:6|confirmed',
        // 'phone' => 'nullable|string',
        // 'address' => 'nullable|string',
    ]);

    Customer::create([
        // 'customerID' => uniqid('CUST-'),
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        // 'phone' => $request->phone,
        // 'address' => $request->address,
    ]);

    return redirect('/login')->with('success', 'Account created successfully');
}

   // Handle user login
   public function login(Request $request)
   {
       $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);
   
       if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

   

public function logout(Request $request)
{
    Auth::logout();
    return redirect('/login')->with('success', 'Logged out successfully');
}


}
