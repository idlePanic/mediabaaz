@extends('layouts.admin_app')

@section('content')
    <div class="container col-md-8 offset-md-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <h2>Filterable Table</h2>
                <p>Type something in the input field to search the table for first names, last names or emails:</p>
                <input id="myInput" type="text" placeholder="Search..">
                <br><br>

                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>email</th>
                        <th>is_admin</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <strong>{{$user->is_admin}}</strong>
                            </td>
                            <td><a class="ml-2 btn btn-success btn-sm form-control" href="{{asset(route('admin.setAdmin', $user->id))}}">set admin</a>
                                <a class="ml-2 btn btn-danger btn-sm form-control" href="{{asset(route('admin.setUser', $user->id))}}">set user</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{$users->links()}}
                </table>
                <br>
                {{$users->links()}}
    </div>
@endsection
