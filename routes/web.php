<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     // sleep(2);
//     return Inertia::render('Home');
// })->name('home');

Route::inertia('/', 'Home')->name('home');

Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

#same functionality above
// Route::get('/about', function () {
//     return Inertia('About', ['user' => 'pal']);
// })->name('about');

#shortened version above
// Route::inertia('/about', 'About', ['user' => 'pal']);

Route::inertia('/login', 'Auth/Login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');