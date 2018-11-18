@extends('layouts.app')

@section('content')
    <div class="container col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        {{--<form class="form-control" method="post" action="/comment/{{$comment->id}}/update">--}}
        <form class="form-control" method="post" action="{{asset(route('comment.update',$comment->id))}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PATCH') }}
            <textarea name="new_body" class="form-control" placeholder="{{$comment->body}}"></textarea>
            <button class="form-control btn btn-success">Edit Comment</button>
        </form>
        <form class="form-control" method="post" action="{{asset(route('comment.destroy',$comment->id))}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('DELETE') }}
            <button class="form-control btn btn-danger">Delete Comment</button>
        </form>

    </div>
@endsection
