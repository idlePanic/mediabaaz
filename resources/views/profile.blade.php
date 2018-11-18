<style>
    .hovereffect {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hovereffect .overlay {
        width: inherit;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        background-color: rgba(0,0,0,0.02);
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transform: translate(460px, -100px) rotate(180deg);
        -ms-transform: translate(460px, -100px) rotate(180deg);
        transform: translate(460px, -100px) rotate(180deg);
        -webkit-transition: all 0.2s 0.4s ease-in-out;
        transition: all 0.2s 0.4s ease-in-out;
    }

    .hovereffect img {
        display: block;
        position: relative;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    .hovereffect h2 {
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: rgba(0, 0, 0, 0.2);
    }

    .hovereffect input.info span.info a.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        margin: 50px 0 0 0;
        background-color: transparent;
        -webkit-transform: translateY(-200px);
        -ms-transform: translateY(-200px);
        transform: translateY(-200px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .hovereffect input.info:hover span.info:hover a.info:hover {
        box-shadow: 0 0 5px #fff ;
    }

    .hovereffect:hover .overlay {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transform: translate(0px, 0px);
        -ms-transform: translate(0px, 0px);
        transform: translate(0px, 0px);
    }

    .hovereffect:hover h2 {
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
        -webkit-transition-delay: 0.5s;
        transition-delay: 0.5s;
    }

    .hovereffect:hover a.info {
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }
</style>

@extends('layouts.first_app_page')

@section('content')
    <div class="container">
        <hr>
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
                    @if(\Auth::user() && \Auth::user()->is_admin==1)
                        <li class="nav-item my-btn">
                            <a href="" data-target="#addList" data-toggle="tab" class="nav-link">Media Added by you</a>
                        </li>
                    @endif
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active text-white" id="profile">
                        <h5 class="mb-3"><strong class="my-text">Name: </strong>{{\Auth::user()->name}}</h5>
                        <h5 class="mb-3"><strong class="my-text">Email: </strong>{{\Auth::user()->email}}</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="my-text">About: </h6>
                            </div>
                            <div class="col-md-6">
                                <span class="badge badge-primary"><i class="fa fa-film"></i> 9 film Downloaded</span>
                                <span class="badge badge-info"><i class="fa fa-music"></i> 24 Music Downloaded</span>
                                <span class="badge badge-danger"><i class="fa fa-heart"></i> 43 Likes</span>
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
                    <div class="tab-pane text-white" id="addList">
                            <div class="card my-card">
                                <div class="card-header">
                                    <h3 class="text-center my-text">Movie</h3>
                                </div>
                                <div class="card-body">
                                    <span class="badge badge-primary"><i class="fa fa-upload"></i> 4 film Added by You</span>
                                    <span class="badge badge-info"><i class="fa fa-download"></i> Your Movies Downloaded 40 times</span>
                                    <span class="badge badge-danger"><i class="fa fa-heart"></i> Your Movies Likes 60 times</span>
                                    <h5 class="text-center text-white mt-4">Comming Soon</h5>
                                </div>
                            </div>
                            <div class="card my-card">
                                <div class="card-header">
                                    <h3 class="text-center my-text">Music</h3>
                                </div>
                                <div class="card-body">
                                    <span class="badge badge-primary"><i class="fa fa-upload"></i> 4 music Added by You</span>
                                    <span class="badge badge-info"><i class="fa fa-download"></i> Your Music Downloaded 40 times</span>
                                    <span class="badge badge-danger"><i class="fa fa-heart"></i> Your Music Likes 60 times</span>
                                    <h5 class="text-center text-white mt-4">Comming Soon</h5>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center text-white ">

                <form action="/changeAvatar" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="hovereffect rounded-circle">
                        <img id="avatar" src="avatar/{{Auth::user()->avatar}}" class="img-responsive mx-auto img-fluid  d-block rounded-circle" alt="avatar">
                        <div class="overlay rounded-circle">
                            <h2 class="my-text">Avatar</h2>

                            <label class="custom-file">
                                <input type="file" id="file" name="newAvatar" onchange="readURL(this);" class="custom-file-input info">
                                <span type="file" class="info btn my-btn" onclick="document.getElementById('avatar').src=''">Choose avatar</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn my-btn">Change Photo</button>
                </form>




            </div>
        </div>
        <br>
        <br>

    </div>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatar')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
