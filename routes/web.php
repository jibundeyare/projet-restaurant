<?php

use Illuminate\Support\Facades\Route;

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
    // charge la page home.blade.php
    return view('home');
})->name('home');

Route::get('/contact', function () {
    // charge la page contact.blade.php
    return view('contact');
})->name('contact');
