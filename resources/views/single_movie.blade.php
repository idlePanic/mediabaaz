@extends('layouts.app')

@section('content')
    <div class="container col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <section>
                <div class=" ">
                    <div class="card">
                        <div class="card-header">
                            <span class="float-right"><h5 class="text-danger">{{$movie->likes}}<i class="fa fa-heart"></i></h5></span>
                            <strong class="float-left">{{$movie->name}}</strong>
                        </div>
                        <img class="img-thumbnail img-fluid" src="{{asset('movie_poster/se7en.jpeg')}}"
                             style="width: 100%;height: 700px" >
                        <ul class="list-group">
                            <li class="list-group-item">

                                <div class="figure-caption">Description: {{$movie->description}}<br>
                                    Rate: {{$movie->rate}}<br>
                                    Director: {{$movie->director->name}}<br>
                                    <strong>Casts:</strong>
                                    @for($counter=0 ; $counter < count($movie->casts) ; $counter++)
                                        {{$movie->casts[$counter]->name}}
                                        @if($counter != count($movie->casts)-1)
                                            &
                                        @endif
                                    @endfor
                                    <br>
                                    <span class="imdbRatingPlugin" data-user="ur51550317" data-title="tt0114369" data-style="p2">
                                <a href="https://www.imdb.com/title/tt0114369/?ref_=plg_rt_1">
                                    <img src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/images/imdb_38x18.png" alt=" Se7en(1995) on IMDb" />
                                </a>
                            </span>
                                    <script>
                                        (function(d,s,id){
                                            var js,stags=d.getElementsByTagName(s)[0];
                                            if(d.getElementById(id)){
                                                return;
                                            }
                                            js=d.createElement(s);
                                            js.id=id;
                                            js.src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js";
                                            stags.parentNode.insertBefore(js,stags);
                                        })
                                        (document,"script","imdb-rating-api");
                                    </script>
                                </div>
                            </li>

                            <li class="list-group-item">
                                @cannot('userCantLike', [\App\Like::all(),$movie])
                                    <a class="btn btn-danger" href="{{asset('likes/'.$movie->id)}}"><i class="fa fa-heart text-white">Like</i></a>
                                @endcannot
                                @can('userCantLike', [\App\Like::all(),$movie])
                                    <a class="btn btn-danger" href="{{asset('dislikes/'.$movie->id)}}"><i class="fa fa-thumbs-down text-white">DisLike</i></a>
                                @endcan
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
                <br><br>
                <div class="row">
                    <h2 class="text-white">{{$movie->name}} Trailer</h2>
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/znmZoVkCjpI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <section>
                    <div class="container">
                        <div><br><h3 class="text-white">Comments for this movie</h3>
                        <a data-toggle="collapse" href="#collapse1" class="btn btn-dark text-white">Add your comment</a></div><br>

                        @if(\Auth::check())
                        <div id="collapse1" class="collapse">
                            <div class="card col-md-12">
                                <div class="card-header">Add Your Comment</div>
                                <div class="card-body">
                                    <form method="post" action="{{asset(route('comment.store',['id'=>$movie->id]))}}" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{ method_field('POST') }}
                                        <textarea name="comment" class="form-control" rows="4" placeholder="add your comment"></textarea>
                                        <button class="form-control btn btn-success">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div><br>
                        @else
                            <div id="collapse1" class="collapse">
                                <div class="card card-body text-danger">
                                    <strong>you must sign in</strong>
                                </div>
                                <br>
                            </div>

                        @endif
                {{--<div class=--}}
                @foreach($movie->comments as $comment)
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header float-left"><strong class="text-uppercase">{{$comment->user->name}}</strong> said:</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="/avatar/{{ $comment->user->avatar }}" class="img img-rounded rounded-circle img-fluid"/>
                                        {{--<img src="/avatar/3.jpeg" class="img img-rounded img-fluid"/>--}}
                                        <p class="small text-center">{{$comment->updated_at}}</p>
                                    </div>
                                    <div class="col-md-10">
                                        <p class="clearfix">{{$comment->body}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p><a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                    <a class="float-right btn text-white btn-danger ml-2"> <i class="fa fa-heart"></i> Like</a>
                                    @can('edit_comments' , $comment)
                                        <a class="float-right btn text-white btn-info ml-2" href={{asset(route('comment.show',$comment->id))}}> <i class="fa fa-pencil"></i> edit</a>
                                    @endcan
                                </p>
                            </div>
                        </div>
                    </div>
                        <hr>
                @endforeach
                    </div>
                </section>
    </div>
@endsection
