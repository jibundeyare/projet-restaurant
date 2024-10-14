<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        // charge la page home.blade.php
        return view('home');
    }
}
