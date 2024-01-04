<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show user registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Process user registration
    public function register(Request $request)
    {
        // Validate the registration request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user and log them in
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        // Redirect to the user dashboard or home page
        return redirect()->route('user.dashboard');
    }

    // Show user login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Process user login
    public function login(Request $request)
    {
        // Implement user login logic using the Auth facade
    }

    // Logout user
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
