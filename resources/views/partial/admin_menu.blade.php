<div  class="container-fluid float-left">
    <div class="row">
         <div class="nav-side-menu">
             <br><br><br>

                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" data-parent="#accordion" class="menu-content collapse out">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
                        </li>
                        <li data-toggle="collapse" data-target="#users" class="collapsed">
                            <a>
                                <i class="fa fa-user-edit fa-lg"></i> Users
                                {{--<i class="float-right text-white fa fa-home"></i>--}}
                            </a>
                        </li>
                        <ul class="sub-menu collapse" data-parent="#accordin" id="users">
                            <li class="ml-2 btn-sm list-group-item text-left">
                                <a href="{{asset(route('admin.showAdmins'))}}">
                                    <i class="fa fa-users-cog"></i>Admins</a></li>
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="{{asset(route('admin.showUsers'))}}">
                                    <i class="fa fa-user"></i>Users</a></li>
                        </ul>
                        <li data-toggle="collapse" data-target="#editing" class="collapsed">
                            <a><i class="fa fa-edit fa-lg"></i> Edit content</a>
                        </li>
                        <ul class="sub-menu collapse" data-parent="#accordin" id="editing">
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="{{asset(route('admin.movieManaging'))}}">
                                    <i class="fa fa-film"></i>Movie Managing</a> </li>
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="#">
                                    <i class="fa fa-music"></i>Music Managing</a> </li>
                        </ul>

                        <li data-toggle="collapse" data-target="#adding" class="collapsed">
                            <a><i class="fa fa-plus fa-lg"></i> Add content</a>
                        </li>
                        <ul class="sub-menu collapse" data-parent="#accordin" id="adding">
                            <li class="ml-2 btn-sm list-group-item text-left">
                                <a href="{{asset(route('movies.create'))}}">
                                    <i class="fa fa-film"></i>Movie Adding
                                </a>
                            </li>
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="#">
                                    <i class="fa fa-music"></i>Music Adding</a> </li>
                        </ul>
                        <li data-toggle="collapse" data-target="#creators" class="collapsed">
                            <a><i class="fa fa-plus fa-lg"></i>Movie Creators</a>
                        </li>
                        <ul class="sub-menu collapse" data-parent="#accordin" id="creators">
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="{{asset(route('admin.movieManaging'))}}">
                                    <i class="fa fa-tasks"></i>Add Director</a> </li>
                            <li class="ml-2 btn-sm list-group-item text-left"><a href="#">
                                    <i class="fab fa-galactic-senate"></i>Add Cast</a> </li>
                        </ul>
                    </ul>
                </div>
            </div>

    </div>
</div>
