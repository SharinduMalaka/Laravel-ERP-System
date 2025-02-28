<?php
namespace App\Http\Controllers;


use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:8|confirmed',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        try {
            Customer::create([
                'customerID' => Str::uuid(),
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            Log::info('Customer registered successfully: ' . $request->email);


            return redirect()->route('login')->with('success', 'Customer created successfully.');
        } catch (\Exception $e) {
            Log::error('Error during customer registration: ' . $e->getMessage());
            return back()->with('error', 'There was an issue creating the account.');
        }
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed
        return redirect()->intended('/home');
    } else {
        // Authentication failed
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}

    public function index()
{
    return view('welcome'); // Display the homepage
}
}
