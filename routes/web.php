<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
});

#same functionality above
Route::get('/about', function () {
    return Inertia('About', ['user' => 'pal']);
});

#shortened version above
// Route::inertia('/about', 'About', ['user' => 'pal']);
