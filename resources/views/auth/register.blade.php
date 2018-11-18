@extends('layouts.register')

@section('content')
    <section class="register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 register-sec">
                    <h2 class="text-center">Register Now</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-uppercase">Name</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-uppercase">E-Mail Address</label>

                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group ">
                            <label for="password" class="text-uppercase">Password</label>


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="text-uppercase">Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group row mb-0">
                            {{--<div class="col-md-6 offset-md-4">--}}
                                <button type="submit" class="btn my-btn form-control">
                                    {{ __('Register') }}
                                </button>
                            {{--</div>--}}
                        </div>

                    </form>

                </div>
                <div class="col-md-8 banner-sec">
                </div>
            </div>
        </div>
    </section>


@endsection
