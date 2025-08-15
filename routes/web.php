<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
})->name('home');

 Route::inertia('/register', 'Auth/Register')->name('register');

#same functionality above
// Route::get('/about', function () {
//     return Inertia('About', ['user' => 'pal']);
// })->name('about');

#shortened version above
// Route::inertia('/about', 'About', ['user' => 'pal']);
