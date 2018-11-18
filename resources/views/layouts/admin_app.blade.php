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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    {{--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <!------ Include the above in your HEAD tag ---------->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_style.css') }}" rel="stylesheet">

    <style>


        {{-- -------------chart and etc---------------------------}}

        .demo-avatar {
            width: 48px;
            height: 48px;
            border-radius: 24px;
        }
        .demo-layout .mdl-layout__header .mdl-layout__drawer-button {
            color: rgba(0, 0, 0, 0.54);
        }
        .mdl-layout__drawer .avatar {
            margin-bottom: 16px;
        }
        .demo-drawer {
            border: none;
        }
        /* iOS Safari specific workaround */
        .demo-drawer .mdl-menu__container {
            z-index: -1;
        }
        .demo-drawer .demo-navigation {
            z-index: -2;
        }
        /* END iOS Safari specific workaround */
        .demo-drawer .mdl-menu .mdl-menu__item {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .demo-drawer-header {
            box-sizing: border-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 16px;

        }
        .demo-avatar-dropdown {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .demo-navigation {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }
        .demo-layout .demo-navigation .mdl-navigation__link {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            color: rgba(255, 255, 255, 0.56);
            font-weight: 500;
        }
        .demo-layout .demo-navigation .mdl-navigation__link:hover {
            background-color: #00BCD4;
            color: #37474F;
        }
        .demo-navigation .mdl-navigation__link .material-icons {
            font-size: 24px;
            color: rgba(255, 255, 255, 0.56);
            margin-right: 32px;
        }

        .demo-content {
            max-width: 1080px;
        }

        .demo-charts {
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .demo-chart:nth-child(1) {
            color: #ACEC00;
        }
        .demo-chart:nth-child(2) {
            color: #00BBD6;
        }
        .demo-chart:nth-child(3) {
            color: #BA65C9;
        }
        .demo-chart:nth-child(4) {
            color: #EF3C79;
        }
        .demo-graphs {
            padding: 16px 32px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
        }
        /* TODO: Find a proper solution to have the graphs
         * not float around outside their container in IE10/11.
         * Using a browserhacks.com solution for now.
         */
        _:-ms-input-placeholder, :root .demo-graphs {
            min-height: 664px;
        }
        _:-ms-input-placeholder, :root .demo-graph {
            max-height: 300px;
        }
        /* TODO end */
        .demo-graph:nth-child(1) {
            color: #00b9d8;
        }
        .demo-graph:nth-child(2) {
            color: #d9006e;
        }

        .demo-cards {
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-align-content: flex-start;
            -ms-flex-line-pack: start;
            align-content: flex-start;
        }
        .demo-cards .demo-separator {
            height: 32px;
        }
        .demo-cards .mdl-card__title.mdl-card__title {
            color: white;
            font-size: 24px;
            font-weight: 400;
        }
        .demo-cards ul {
            padding: 0;
        }
        .demo-cards h3 {
            font-size: 1em;
        }
        .demo-updates .mdl-card__title {
            min-height: 200px;
            background-image: url('images/dog.png');
            background-position: 90% 100%;
            background-repeat: no-repeat;
        }
        .demo-cards .mdl-card__actions a {
            color: #00BCD4;
            text-decoration: none;
        }

        .demo-options h3 {
            margin: 0;
        }
        .demo-options .mdl-checkbox__box-outline {
            border-color: rgba(255, 255, 255, 0.89);
        }
        .demo-options ul {
            margin: 0;
            list-style-type: none;
        }
        .demo-options li {
            margin: 4px 0;
        }
        .demo-options .material-icons {
            color: rgba(255, 255, 255, 0.89);
        }
        .demo-options .mdl-card__actions {
            height: 64px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-sizing: border-box;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        {{-- -------------chart and etc---------------------------}}

        {{--  -------------- admin panel access list--------}}

        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary{
            background-color: #007bff;
            color: #FFF;
        }

        .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
        }

        .card-counter.success{
            background-color: #66bb6a;
            color: #FFF;
        }

        .card-counter.info{
            background-color: #26c6da;
            color: #FFF;
        }

        .card-counter i{
            font-size: 5em;
            opacity: 0.2;
        }

        .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
        }

        {{--  -------------- admin panel access list--------}}

    </style>

    <script>


        // In your Javascript (external .js resource or <script> tag)
        // $(document).ready(function() {
        //     $('.js-example-basic-single').select2();
        // });


        $('#editMovie').on('show.bs.modal',function (event) {
            console.log("hello");
            var button = $(event.relatedTarget)
            var editVal = button.attr('data-val');
            console.log(editVal)
            console.log("mjhjhkjhmhb");
            $(this).find('input[name=movie_name]').val(editVal)
        });
            // var button = $(event.relatedTarget)
            // var id = button.data('id')
            // var modal = $(this)
            // console.log(id)
            // $('edit_form').attr("action", "/movies/update/" + id+"/")

        // $('#editMovie').on('show.bs.modal', function (event) {
        //     var button = $(event.relatedTarget) ;// Button that triggered the modal
        //     var recipient = button.data('whatever'); // Extract info from data-* attributes
        //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        //     var modal = $(this)
        //     modal.find('.modal-title').text('New message to ' + recipient)
        //     modal.find('.modal-body input').val(recipient)
        // })
        //search in table ---------------------------------------------------------------------------

        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        //search in table ---------------------------------------------------------------------------

        //multiple select
        $('select').selectpicker();


    //    header and menu
        // SideNav Button Initialization
        // $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        // var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        // Ps.initialize(sideNavScrollbar);
        //    header and menu

    //    ----------------input image---------------------------




        // Select the file input and use
        // create() to turn it into a pond
        // FilePond.create(
        //     document.querySelector('input')
        // );
    //    ----------------input image---------------------------
    </script>
</head>
<body>
    <div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

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
        {{--<header>--}}
            {{--@include('partial.admin_header')--}}
        {{--</header>--}}

        <!--top nav start=======-->

            <!--    top nav end===========-->

            <header>
                @include('partial.admin_header')
            </header>

        <main class="py-4">
        <br>
            @include('partial.admin_menu')

            <div class="offset-md-3 offset-lg-3">
                @yield('content')
            </div>

        </main>
    </div>
</body>
</html>
