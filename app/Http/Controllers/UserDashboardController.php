<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Logic for user dashboard
        return view('user.dashboard');
    }
}
