@extends('layouts.first_app_page')

@section('content')
    <div class="container">
        <div class="text-center">
            <hr style="width:200px">
            <!-- Header/Home -->
            <h1 class="text-center text-white"><span class="w3-hide-small">This is</span> Hamid Pahlevani.</h1>
            <p class="text-white">Developer and Web Designer.</p>
            {{--<img src="/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">--}}
            <!-- About Section -->
            <hr style="width:200px">
            <div class="text-left ">
                <h2 class="my-text">My Detail</h2>
                <hr style="width:200px">
                <p class="text-white">
                    Freelancer Web Developer with PHP and Laravel<br>
                    Web Designer using Bootstrap4 Bulma JavaScript Jquery Vuejs<br>
                    Desktop Programmer with Java ee<br>
                    Linux Lover<br>
                </p>
                <hr style="width:200px">
                <h3 class="my-text">My Skills</h3>
                <p class="text-white">Php and Laravel</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped my-color" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><strong class="text-black">80%</strong></div>
                </div>
                <hr style="width:200px">
                <p class="text-white">Web Design</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped my-color" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><strong class="text-black">70%</strong></div>
                </div>
                <hr style="width:200px">
                <p class="text-white">Linux</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped my-color" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><strong class="text-black">60%</strong></div>
                </div>

                <hr style="width:200px">
                <button class="btn my-btn">
                    <i class="fa fa-download"></i> Download Resume
                </button>

                <hr style="width:200px">
                <!-- Grid for pricing tables -->


            </div>
            <!-- END PAGE CONTENT -->
        </div>
    </div>
    <!-- Page Content -->


@endsection

