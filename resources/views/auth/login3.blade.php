@extends('layouts.login')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="d-flex h-100">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">--}}
    {{--<h3>Sign In</h3>--}}
    {{--<div class="d-flex justify-content-end social_icon">--}}
    {{--<span><i class="fab fa-facebook-square"></i></span>--}}
    {{--<span><i class="fab fa-google-plus-square"></i></span>--}}
    {{--<span><i class="fab fa-twitter-square"></i></span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('login') }}">--}}
    {{--@csrf--}}

    {{--<div class="input-group form-group row">--}}
    {{--<label for="email" class="col-sm-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}
    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<div class="form-check">--}}
    {{--<input class="form-check-input text-white" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--<label class="form-check-label text-white" for="remember">--}}
    {{--{{ __('Remember Me') }}--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-8 offset-md-4">--}}
    {{--<button type="submit" class="form-group form-control btn btn-secondary">--}}
    {{--{{ __('Login') }}--}}
    {{--</button>--}}
    {{--<a class="btn btn-link form-control form-group" href="{{ route('password.request') }}">--}}
    {{--{{ __('Forgot Your Password?') }}--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Login Now</h2>
                    <form class="login-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="text" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="">
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                        </div>

                    </form>
                    <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
