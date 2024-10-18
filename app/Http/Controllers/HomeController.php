<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $title = 'Accueil';

        $actu = Actu::find(1);

        // charge la page home.blade.php
        return view('home', [
            'title' => $title,
            'actu' => $actu,
        ]);
    }
}
