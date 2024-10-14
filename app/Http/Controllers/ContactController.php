<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        // charge la page contact.blade.php
        return view('contact');
    }
}
