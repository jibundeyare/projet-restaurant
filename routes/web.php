<?php

use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/carte', [CarteController::class, 'index'])->name('carte');

Route::get('/admin/contact', [AdminContactController::class, 'index'])->name('admin.contact.index');

// test d'un template parent-enfant
Route::get('/test', function () {
    // affiche la vue enfant.blade.php
    return view('enfant');
});
