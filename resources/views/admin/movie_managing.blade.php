@extends('layouts.admin_app')

@section('content')
    <div class="container col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <h2>hello manager</h2>
                <h2>Filterable Table</h2>
                <p>Type something in the input field to search the table for first names, last names or emails:</p>
                <input id="myInput" type="text" placeholder="Search..">
                <br><br>

                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Direcor</th>
                        <th>Casts</th>
                        <th>Rate</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{$movie->name}}</td>
                            <td>{{$movie->id}}</td>
                            <td>{{$movie->director->name}}</td>
                            <td>
                                @for($counter = 0 ; $counter < count($movie->casts) ; $counter++)
                                    {{$movie->casts[$counter]->name}}
                                @endfor
                            </td>
                            <td>{{$movie->rate}}</td>
                            {{--<td><a href="{{asset(route('movies.edit',$movie->id))}}" class="btn btn-info text-white ml-1">edit</a></td>--}}

                            <td>
                                <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#editMovie-{{$movie->id}}"
                                        data-whatever="{{$movie->name}}" data-value="{{$movie->id}}" data-name="{{$movie->name}}">Edit
                                </button>

                            </td>
                            <td>
                                <form class="form-control" method="post" action="{{asset(route('movies.destroy',$movie->id))}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger form-control">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

{{--                @php(dd($movies->director()))--}}
                @foreach($movies as $movie)
                    <div class="modal fade" id="editMovie-{{$movie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Movie</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="edit_form" data-href="{{$movie->id}}" class="form-control form-group" action="{{asset(route('movies.update',$movie->id))}}">
                                    {{--<form method="post" id="edit_form" data-href="{{$movie->id}}" class="form-control form-group" action="{{asset('/movies/update/'.$movie->id )}}">--}}

                                        {{method_field('PATCH')}}
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
{{--                                        {{csrf_token()}}--}}

                                        <div class="form-group">
                                            <label for="name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control hidden" name="movie_name" id="movie_name"  placeholder="{{$movie->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="director"  class="col-form-label">Direcor:</label>
                                            <select class="form-control" name="director">

                                                <option>{{$movie->director->name}}</option>
                                                @foreach(\App\Director::all() as $director)
                                                        <option value="{{$director->id}}">{{$director->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="movie-casts[]" class="col-form-label">Casts:</label>
                                            <select class="form-control selectpicker" id="movie-casts[]" name="casts[]" multiple data-live-search="true">
                                                @foreach(\App\Cast::all() as $cast)
                                                    <option value="{{$cast->id}}">{{$cast->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button class="form-control btn btn-success" type="submit">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$movies->links()}}
    </div>
@endsection
