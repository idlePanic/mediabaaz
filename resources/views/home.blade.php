@extends('layouts.first_app_page')
@section('main_header')
   <div class="row">
{{--       <img src="{{asset('banner.jpeg')}}">--}}
       {{--<iframe style="position:absolute" frameBorder="0"  src="http://www.auplod.com/u/odplauafb6d.gif"></iframe>--}}
       {{--<div style="width:100%;height:0;padding-bottom:55%;position:relative;"><iframe src="https://giphy.com/embed/1399g8OxXMMbD2" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p>--}}
   </div>
@endsection

@section('content')
    <br>
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">

                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <div class="row text-center mt-1">
        @include('partial.logo')
    </div>

    <hr>

    <div class="row">

        <div class="card col-md-12 my-card">
            <div class="card-header text-uppercase my-text text-center"><h3>NEW Films</h3></div>
            <div class="card-body card-blue text-white">
                <div class="row">
                    @for($i=0 ; $i<4 ; $i++)
                        <div class="col-lg-3 col-md-3 col-sm-3 ">
                            <a href="{{asset(route('movies.show', $new_movies[$i]->id))}}">
                                <img class="img-fluid img-thumbnail" src="{{asset('movie_poster/se7en.jpeg')}}">
                                <br>
                                <strong class="my-text">{{$new_movies[$i]->name}}</strong>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="card-footer">
                <a class="btn my-btn w-100" href="{{asset(route('movies.index'))}}">Enter to the Movie section</a>
            </div>
        </div>
    </div>
    <br><hr>
    <div class="row">
        <div class="card col-md-12 my-card mr-4">
            <div class="card-header text-uppercase text-center my-text"><h4>New Music</h4></div>
            <div class="card-body text-white">
                <strong class="my-text">list of new Music</strong>
            </div>
            <div class="card-footer">
                <a class="btn my-btn w-100" href="{{asset('/coming_soon')}}">Enter to the Music section</a>
            </div>
        </div>

    </div>

@endsection
