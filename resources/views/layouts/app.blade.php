<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VSeller</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    html{
        scroll-behavior: smooth;
    }
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: black;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #333333;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: lightblue;
    }
</style>
<body class="d-flex flex-column min-vh-100 text-light" style="background-color: #121212">
    <div id="app">
        <nav class="rounded navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-4 me-3" href="{{ url('/') }}">
                    VSeller
                </a>
                <div class="nav-item me-auto mt-1">
                    <a class="nav-link active text-info" style="font-weight: bold" href="/">Home</a>
                </div>
                @if(Auth::check())
                    @if(Auth::user()->role == 1)
                        <div class="nav-item me-auto mt-1" style="font-weight: bold">
                            <a class="nav-link text-info" href="/cartlist">{{ __('Cart') }}</a>
                        </div>
                    @endif
                    @if(Auth::user()->role == 2)
                        <div class="nav-item me-auto mt-1" style="font-weight: bold">
                            <a class="nav-link text-info" href="/managesw">{{ __('Manage Apps') }}</a>
                        </div>
                    @endif
                @endif
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <form class="d-flex" action="/search" method="POST">
                            @csrf
                            <input class="form-control me-2 bg-dark text-light" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-info me-5" type="submit">Search</button>
                        </form>
                        @guest
                            @if (Route::has('login'))
                                <div class="nav-item me-5" style="font-weight: bold">
                                    <a class="nav-link text-info" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            @endif

                            @if (Route::has('register'))
                                <div class="nav-item me-5" style="font-weight: bold">
                                    <a class="nav-link text-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <li class="dropdown" style="margin-right: 15%">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-weight: bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>
                                <div class="dropdown-menu text-info" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role == 1)
                                        <a class="dropdown-item" href="/profile" onclick="#">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="/history" onclick="#">
                                            {{ __('Transaction History') }}
                                        </a>
                                    @endif
                                    @if(Auth::user()->role == 2)
                                        <a class="dropdown-item" href="/profile" onclick="#">
                                            {{ __('Profile') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="mt-auto pt-4 pb-3 ps-5 text-info bg-dark text-start">
        <p>© 2022 VSeller. All rights reserved.</p>
    </div>
</body>
</html>
