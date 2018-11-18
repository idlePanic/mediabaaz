@extends('layouts.login')

@section('content')
    <section class="login-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Login Now</h2>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-uppercase text-md-right">E-Mail Address</label>
                                    <input id="email" type="email" class="form-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-uppercase text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                            </div>
                            <div class="form-group row mb-0">

                                    <button type="submit" class="form-group form-control btn my-btn">
                                        {{ __('Login') }}
                                    </button>
                                    <a class="btn btn-link form-control form-group" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a class="btn btn-link form-control form-group" href="{{ route('register') }}">
                                        {{ __('You Dont Have Account??') }}
                                    </a>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-8 banner-sec">
                    </div>
                </div>
            </div>
        </section>

    {{--<section class="login-block">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 login-sec">--}}
                    {{--<h2 class="text-center">Login Now</h2>--}}
                    {{--<form class="login-form">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputEmail1" class="text-uppercase">Username</label>--}}
                            {{--<input type="text" class="form-control" placeholder="">--}}

                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputPassword1" class="text-uppercase">Password</label>--}}
                            {{--<input type="password" class="form-control" placeholder="">--}}
                        {{--</div>--}}


                        {{--<div class="form-check">--}}
                            {{--<label class="form-check-label">--}}
                                {{--<input type="checkbox" class="form-check-input">--}}
                                {{--<small>Remember Me</small>--}}
                            {{--</label>--}}
                            {{--<button type="submit" class="btn btn-login float-right">Submit</button>--}}
                        {{--</div>--}}

                    {{--</form>--}}
                    {{--<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>--}}
                {{--</div>--}}
                {{--<div class="col-md-8 banner-sec">--}}
                    {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
                        {{--<ol class="carousel-indicators">--}}
                            {{--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
                            {{--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
                            {{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
                        {{--</ol>--}}
                        {{--<div class="carousel-inner" role="listbox">--}}
                            {{--<div class="carousel-item active">--}}
                                {{--<img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">--}}
                                {{--<div class="carousel-caption d-none d-md-block">--}}
                                    {{--<div class="banner-text">--}}
                                        {{--<h2>This is Heaven</h2>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="carousel-item">--}}
                                {{--<img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">--}}
                                {{--<div class="carousel-caption d-none d-md-block">--}}
                                    {{--<div class="banner-text">--}}
                                        {{--<h2>This is Heaven</h2>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="carousel-item">--}}
                                {{--<img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">--}}
                                {{--<div class="carousel-caption d-none d-md-block">--}}
                                    {{--<div class="banner-text">--}}
                                        {{--<h2>This is Heaven</h2>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection
