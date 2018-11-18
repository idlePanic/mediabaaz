@extends('layouts.first_app_page')

@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item my-btn">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li class="nav-item my-btn">
                        <a href="" data-target="#likes" data-toggle="tab" class="nav-link">Likes</a>
                    </li>
                    <li class="nav-item my-btn">
                        <a href="" data-target="#recommendation" data-toggle="tab" class="nav-link">Recommendation</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active text-white" id="profile">
                        <h5 class="mb-3"><strong class="my-text">Name: </strong>{{\Auth::user()->name}}</h5>
                        <h5 class="mb-3"><strong class="my-text">Email: </strong>{{\Auth::user()->email}}</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>About</h6>
                                <p>
                                    Web Designer, UI/UX Engineer
                                </p>
                                <h6>Hobbies</h6>
                                <p>
                                    Indie music, skiing and hiking. I love the great outdoors.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Recent badges</h6>
                                <a href="#" class="badge badge-dark badge-pill">html5</a>
                                <a href="#" class="badge badge-dark badge-pill">react</a>
                                <a href="#" class="badge badge-dark badge-pill">codeply</a>
                                <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                                <a href="#" class="badge badge-dark badge-pill">css3</a>
                                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                                <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane text-white" id="likes">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="my-text">You Like This Movies</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="text-black">Coming Soon</h5>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-white" id="recommendation">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="my-text">Recommendation system</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="text-black">Comming Soon</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center text-white ">
                <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span type="file" class="">Choose file</span>
                </label>
            </div>
        </div>
    </div>




@endsection
