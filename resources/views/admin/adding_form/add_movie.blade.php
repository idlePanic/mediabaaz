@extends('layouts.admin_app')

@section('content')
    <div class="container col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <br><br>
                <form method="post" class="form-control form-group" action="{{asset(route('movies.store'))}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field('POST')}}

                    <div class="text-center"><h3>Adding Movie</h3></div>
                    <div class="form-group {{ $errors->has('movie_name') ? ' has-error' : '' }}" >
                        <label for="movie-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="movie_name" id="movie-name">
                        @if($errors->has('movie_name'))
                            <span class="text-danger"><small>{{$errors->first('movie_name')}}</small></span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="movie-director" class="col-form-label">Direcor:</label>
                        <select class="form-control" id="movie-director" name="cirector">
                            @foreach(\App\Director::all() as $director)
                                <option value="{{$director->id}}">{{$director->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" rows="3">{{ old('message')}}</textarea>

                        @if($errors->has('description'))
                            <span class="text-danger"><small>{{$errors->first('description')}}</small></span>
                        @endif
                    </div>

                    <div class="form-control {{$errors->has('rate') ? ' has-error' : ''}}">
                        <label for="movie_rate" class="col-form-label">Rate:</label>
                        <input class="form-control" id="movie_rate" type="number" min="1" max="10" name="rate">
                        @if($errors->has('rate'))
                            <span class="text-danger"><small>{{$errors->first('rate')}}</small></span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="movie-casts[]" class="col-form-label">Casts:</label>
                        <select class="form-control selectpicker" id="movie-casts[]" name="casts[]" multiple data-live-search="true">
                            @foreach(\App\Cast::all() as $cast)
                                <option value="{{$cast->id}}">{{$cast->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <img id="poster" src="" class="form-control  img-responsive mx-auto img-fluid  d-block " alt="avatar">
                    <label class="custom-file">
                            <input type="file" id="file" name="newAvatar" onchange="readURL(this);" class="custom-file-input info">
                            <span type="file" class="info btn btn-primary form-control" onclick="document.getElementById('poster').src=''">Choose Poster</span>
                        </label>
                    <hr>

                    {{--<div class="form-control {{$errors->has('image') ? ' has-error' : ''}}">--}}
                        {{--<div class="custom-file">--}}
                            {{--<label class="custom-file-label" for="imageMovie">Choose Cover Movie</label>--}}
                            {{--<input type="file" name="image" class="custom-file-input" id="imageMovie">--}}
                        {{--</div>--}}
                        {{--@if($errors->has('image'))--}}
                            {{--<span class="text-danger"><small>{{$errors->first('image')}}</small></span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    <button class="form-control btn btn-success" type="submit">ADD Movie</button>
                </form>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#poster')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
