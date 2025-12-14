<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::inertia('/', 'Home', ['users' => User::paginate(5)])->name('home');

Route::middleware('auth')->group(function () {
    // Route::inertia('/profile', 'Profile')->name('profile');
    Route::inertia('/dashboard', 'Dashboard')->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

#same functionality above
// Route::get('/about', function () {
//     return Inertia('About', ['user' => 'pal']);
// })->name('about');

#shortened version above
// Route::inertia('/about', 'About', ['user' => 'pal']);