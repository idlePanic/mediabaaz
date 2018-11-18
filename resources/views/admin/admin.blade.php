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
                        <th>roles</th>
                        <th>Permission</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">

                    {{--@php(dd($admins))--}}
                    {{--@for($i=0 ; $i<count($admins) ; $i++)--}}
                        {{--<tr>--}}
                        {{--<td>{{$admins[$i]->name}}</td>--}}
                        {{--<td>{{$admins[$i]->id}}</td>--}}
                        {{--<td>--}}
                        {{--@for($counter = 0 ; $counter < count($admins[$i]->roles) ; $counter++)--}}
                        {{--{{$admins[$i]->roles[$counter]->name}}--}}
                        {{--@endfor--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--@for($ro = 0 ; $ro < count($admins[$i]->roles) ; $ro++)--}}
                        {{--@for($per = 0 ; $per < count($admins[$i]->roles[$ro]->permissions) ; $per++)--}}
                        {{--{{$admins[$i]->roles[$ro]->permissions[$per]->name}}--}}
                        {{--@endfor--}}
                        {{--@endfor--}}

                        {{--</td>--}}
                        {{--<td>  <form method="post" action="{{asset(route('admin.editRoles', $admins[$i]->id))}}">--}}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--{{ method_field('POST') }}--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="exampleFormControlSelect1">Role:</label>--}}
                        {{--<select class="form-control" id="exampleFormControlSelect1" name="role">--}}
                        {{--<option value={{$admins[$i]->roles[0]->id}}>{{$admins[$i]->roles[0]->name}}</option>--}}
                        {{--@foreach($roles as $role)--}}
                        {{--@if( $admins[$i]->roles[0]->id  != $role->id)--}}
                        {{--<option value={{$role->id}}> {{$role->name}}</option>--}}
                        {{--@endif--}}
                        {{--@endforeach--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="form-control btn btn-primary">Change Role</button>--}}
                        {{--</form></td>--}}

                        {{--<td>--}}
                        {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endfor--}}


                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->id}}</td>
                            <td>
                                @for($counter = 0 ; $counter < count($admin->roles) ; $counter++)
                                    {{$admin->roles[$counter]->name}}
                                @endfor
                            </td>
                            <td>
                                @for($ro = 0 ; $ro < count($admin->roles) ; $ro++)
                                    @for($per = 0 ; $per < count($admin->roles[$ro]->permissions) ; $per++)
                                        {{$admin->roles[$ro]->permissions[$per]->name}}
                                    @endfor
                                @endfor

                            </td>
                            <td>  <form method="post" action="{{asset(route('admin.editRoles', $admin->id))}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {{ method_field('POST') }}
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Role:</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="role">
                                            <option value={{$admin->roles[0]->id}}>{{$admin->roles[0]->name}}</option>
                                            @foreach($roles as $role)
                                                @if( $admin->roles[0]->id  != $role->id)
                                                    <option value={{$role->id}}> {{$role->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="form-control btn btn-primary">Change Role</button>
                                </form></td>

                            <td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
    </div>
@endsection
