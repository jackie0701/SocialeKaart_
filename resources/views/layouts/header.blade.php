<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Sociale Kaart - Home"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sociale kaart') | Sociale kaart</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
    @show
</head>
<body class="default">
<div class="container">
    <div class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-brand">
            Logo
        </div>
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
                </li>
                <li class="nav-item">
                @if (Route::has('logout'))
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </li>
            </ul>

    </div>
</div>
</div>
<h1 class="title">Sociale Kaart</h1>
@yield('content')


@extends ('layouts.footer')

</body>
</html>

