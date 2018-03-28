<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
    @show
</head>
<body>
<header id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="#">Berichten</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
<nav class="sidebar toggled">
    <div class="sidebar-wrapper bg-dark">
        <ul class="sidebar-nav">
            <li>
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="# ">Pagina's</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('gebruiker')}}">Gebruikers</a>
            </li>
            <li>
                <a class="nav-link" href="#">Instellingen</a>
            </li>

        </ul>
    </div>
</nav>


<main class="py-4 px-4">
    @yield('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-black bg-white">
                    <div class="card-header">
                        Welkom, {{ ucfirst(Auth::user()->name)}}
                    </div>
                    <div class="card-body">
                        Dit is de admin panel.
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
