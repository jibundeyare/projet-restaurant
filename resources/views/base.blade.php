<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div>
            {{-- <img class="logo" src="{{ asset('img/restaurant.png') }}" alt=""> --}}
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="#">Plats</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    @section("content")
    @show
    <footer>
        <ul>
            <li><a href="#">facebook</a></li>
            <li><a href="#">instagram</a></li>
            <li><a href="#">tiktok</a></li>
        </ul>
        <ul>
            <li>Acme Food</li>
            <li>Copyright 2024</li>
            <li>Tous droits réservés</li>
            <li><a href="#">Mentions légales</a></li>
        </ul>
    </footer>
</body>
</html>