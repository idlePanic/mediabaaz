@extends('layouts.app')

@section('content')

        @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        <section>
            <div class="container col-md-10">
                @foreach($movies as $movie)
                    <div class="card my-card mt-5">
                        <a href="{{asset(route('movies.show',$movie->id))}}">
                            <h4 class="card-title card-header text-center my-text">Download {{$movie->name}} Movie</h4>
                        </a>
                        <hr>
                        <div class="row float-left">
                            <hr>
                            <div class="col-md-4">
                                <img src="{{asset('movie_poster/se7en.jpeg')}}" class="img-fluid ml-4">
                            </div>
                            <div class="col-md-8">
                                <div class="card-block">
                                    <p class="d-md-block d-none card-text text-white">
                                        <strong class="my-text">Direcor:</strong>
                                        {{$movie->director->name}}
                                    </p>
                                    <p class="d-md-block d-none card-text text-white">
                                        <strong class="my-text">Casts: </strong>
                                        @for($counter=0 ; $counter < count($movie->casts) ; $counter++)
                                            {{$movie->casts[$counter]->name}}
                                            @if($counter != count($movie->casts)-1)
                                                &
                                            @endif
                                        @endfor
                                    </p>
                                    <article class="d-md-block d-none text-white" style=" overflow-y: hidden; overflow-x: hidden">
                                        <strong class="my-text">Description: </strong>
                                        {{$movie->description}}
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer offset-md-3">
                            <a href="{{asset(route('movies.show',$movie->id))}}" class="btn my-btn w-100  mb-0">Read more</a>
                        </div>
                    </div>
                @endforeach
                <br>
                    <div class="pagination">{{ $movies->links() }}</div>
            </div>
        </section>
@endsection
