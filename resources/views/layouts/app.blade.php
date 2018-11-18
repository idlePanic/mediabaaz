<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
        @import url(https://fonts.googleapis.com/css?family=Squada+One);

        /*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/template-overviews/simple-sidebar)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */


        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.9s;
        }

        .navbar {
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */
        #sidebar {
            width: 250px;
            /*position: fixed;*/
            /*position: -webkit-sticky;*/
            left: 0;
            height:100vh;
            z-index: 0;
            background: #000000;
            color: #f39c12;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #000000;
        }

        #sidebar ul p {
            color: #f39c12;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #000000;
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #000000;
            background: #f39c12;
        }


        a[data-toggle="collapse"] {
            position: relative;
        }

        a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
            content: '\e259';
            display: block;
            position: absolute;
            right: 20px;
            font-family: 'Glyphicons Halflings';
            font-size: 0.6em;
        }
        a[aria-expanded="true"]::before {
            content: '\e260';
        }


        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #202020;
        }

        ul.CTAs {
            padding: 20px;
        }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */
        #content {
            width: calc(100% - 250px);
            padding: 40px;
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }
        #content.active {
            width: 100%;
        }


        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                width: 100%;
            }
            #content.active {
                width: calc(100% - 250px);
            }
            #sidebarCollapse span {
                display: none;
            }
        }
        /*-------------------pre loader----------------------------------------------------*/
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            /* change if the mask should have another color then white */
            z-index: 99;
            /* makes sure it stays on top */
        }

        #status {
            width: 200px;
            height: 200px;
            position: absolute;
            left: 50%;
            /* centers the loading animation horizontally one the screen */
            top: 50%;
            /* centers the loading animation vertically one the screen */
            background-image: url(https://raw.githubusercontent.com/niklausgerber/PreLoadMe/master/img/status.gif);
            /* path to your loading animation */
            background-repeat: no-repeat;
            background-position: center;
            margin: -100px 0 0 -100px;
            /* is width and height divided by two */
        }
        /*-------------------pre loader----------------------------------------------------*/

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }




    </style>
    <script>
        $('.carousel').carousel();

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


    //   ------------pre loader-------------------------------------------------
        $(window).on('load', function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(50).css({'overflow':'visible'});
        })
    //   ------------pre loader--------------------- ----------------------------




    </script>
</head>
<body>
    <div id="app">
        {{--<div id="preloader">--}}
            {{--<div id="status">&nbsp;</div>--}}
        {{--</div>--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--@if (Route::has('register'))--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--@endif--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
        {{--<br><br><br>--}}
        @yield('main_header')
        <main>
            @include('partial.header')
            <div class="float-left">
                @include('partial.menu')
            </div>
            <div class="offset-md-3 col-md-10">
                @yield('content')
            </div>
        </main>

        <footer>
            @include('partial.footer')
        </footer>
    </div>
</body>
</html>
