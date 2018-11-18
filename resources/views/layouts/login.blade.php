<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
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

        @import url('https://fonts.googleapis.com/css?family=Numans');





        .login-block{
            background: #DE6262;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #3f4c6b, #3f4c6b);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #3f4c6b , #3f4c6b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            padding : 50px 0;
        }
        .banner-sec{background:url('log-reg-bg.jpg')  no-repeat  bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
        .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
        .carousel-inner{border-radius:0 10px 10px 0;}
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{padding: 50px 30px; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #f39c12;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:#f39c12; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: #3f4c6b; color:#fff; font-weight:600;}
        .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{color:#fff; font-weight:600;}
        .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
    </style>
    <script>
        $('.carousel').carousel()
    </script>
</head>
<body>
    <div id="app">
        <main>
            @include('partial.header')
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>

        </main>

        <footer>
            @yield('footer')
        </footer>
    </div>
</body>
</html>
