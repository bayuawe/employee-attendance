<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Process admin login
    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the admin using the guard 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // If login successful, redirect to the admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Logout admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
