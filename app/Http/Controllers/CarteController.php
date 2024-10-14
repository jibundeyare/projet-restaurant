<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    function index() {
        // affiche la vue carte.blade.php
        return view('carte');
    }
}
