<?
// AdminController.php

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
        // Implement admin login logic using the Auth facade
    }

    // Logout admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
