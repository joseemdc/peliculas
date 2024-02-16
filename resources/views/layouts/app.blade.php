<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <style>
        .pcard {
            margin: 2px 0px;
            padding: 0px;
            margin-bottom: 5px;
            line-height: 28px;
            font-size:2.5em;
        }

        a {
            text-decoration: none;
            color: #777;
        }

        a:hover,
        a:active,
        a:focus {
            outline: 0;
            text-decoration: none;
            color: #999;
        }

        hr {
            margin: 10px 0px;
            padding: 0px;
            border-top: 0px;
            border-bottom: 1px solid #eee;
        }

        .bg-red {
            background-color: #f75353 !important;
        }

        .bg-green {
            background-color: #51d466 !important;
        }

        /* General CSS */
        body {
            background: #f4f8fd;
            width: 100%;

        }
        .backgroundimage{
            width:100%;
            height:100vh;
            object-fit: cover;

        }

        /* UI - X */
        .movie-ticket {
            max-width: 100%;
           // margin: 60px auto;

        }

        /* Head */
        .movie-ticket .ui-item .ui-head {
            position: relative;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .movie-ticket .ui-item .ui-head img.bg-img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-item .ui-head img.bg-img {
                display: none;
            }
        }

        /* Transparent Background */
        .movie-ticket .ui-head .ui-trans {
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0px;
            padding: 25px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-head .ui-trans {
                background: #fff;
                position: inherit;
                border: 1px solid #ddd;
                border-bottom: 0px;
            }
        }

        .movie-ticket .ui-head .ui-trans img {
            max-width: 180px;
            float: left;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0px 0px 10px 0px #000;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-item .ui-trans img {
                float: none;
                margin-bottom: 15px;
                box-shadow: none;
            }
        }

        /* Details */
        .ui-trans .ui-details {
            margin-left: 205px;
            width:30%
        }

        @media(max-width: 660px) {
             .ui-trans .ui-details {
                margin-left: 0px;
            }
        }

        /* Heading */
        .movie-ticket .ui-trans .ui-details h2 {
            font-size: 28px;
            line-height: 38px;
            font-weight: 300;
        }

        .movie-ticket .ui-trans .ui-details h2>a {
            color: #fff;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details h2>a {
                color: #555;
            }
        }

        /* Label */
         .ui-trans .ui-details a.label {
            border: 1px solid rgba(255, 255, 255, 0.3);
            margin: 5px 2px;
            display: inline-block;
            background: rgba(0, 0, 0, 0.3);
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details a.label {
                border: 1px solid #ccc;
                color: #555;
                background: transparent;
            }
        }

        .movie-ticket .ui-trans .ui-details p {
            font-size: 12px;
            line-height: 23px;
            color: #fff;
            margin-bottom: 5px;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details p {
                color: #555;
            }
        }

        /* Small Headings */
        .movie-ticket .ui-trans .ui-details h4 {
            color: #fff;
            font-size: 12px;
            line-height: 23px;
            margin: 0px;
            width: 100px;
            float: left;
            font-weight: 600;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details h4 {
                color: #555;
                width: 70px;
            }
        }

        .movie-ticket .ui-trans .ui-details h4>span {
            display: inline-block;
            width: 75px;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details h4>span {
                width: 55px;
            }
        }

         .ui-trans .ui-details h5 {
            margin-left: 100px;
            font-size: 12px;
            line-height: 23px;
            font-weight: 400;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details h5 {
                margin-left: 65px;
            }
        }

        .movie-ticket .ui-trans .ui-details h5>a {
            color: #fff;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-trans .ui-details h5>a {
                color: #555;
            }
        }

        /* Review */
        .ui-item .ui-review {
            border: 1px solid #ddd;
            padding: 15px 20px 15px;
            border-top: 0px;
            background: #fff;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        @media(max-width: 660px) {
            .movie-ticket .ui-item .ui-review {
                border-top: 1px solid #ddd;
            }
        }

        /* Heading */
        .movie-ticket .ui-item .ui-review h3 {
            font-size: 16px;
            line-height: 26px;
            display: inline-block;
        }

        /* Paragraph */
        .movie-ticket .ui-item .ui-review p {
            font-size: 13px;
            line-height: 28px;
            color: #777;
            margin-bottom: 10px;
        }

        /* Button */
         .ui-item .ui-review a.ui-btn {
            display: inline-block;
            margin: 0px 5px 8px 0px;
            padding: 5px 10px;
            color: #fff;
            font-size: 13px;
            line-height: 23px;
            font-weight: 600;
            border-radius: 2px;
        }

         .ui-item .ui-review a.ui-btn>i {
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            padding-right: 7px;
            margin-right: 3px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::check())
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="{{ route('peliculas.index') }}"class="nav-link">{{ __('Peliculas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categorias.index') }}"class="nav-link">{{ __('Categorias') }}</a>
                            </li>
                        </ul>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
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

        <main  >
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
