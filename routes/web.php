<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;

// auth
use App\Http\Controllers\Auth\RegisterController;


// admin
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminController;

// user
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Auth
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Admin routes
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

// User routes
Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('user/dashboard', [AdminDashboardController::class, 'index'])->name('user.dashboard');
    Route::post('/user/logout', [AdminController::class, 'logout'])->name('user.logout');
});
require __DIR__ . '/auth.php';
