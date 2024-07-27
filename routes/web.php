<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Redirect root URL to /books
Route::get('/', function () {
    return redirect('/books');
});

// Define your /books route and other routes
Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
