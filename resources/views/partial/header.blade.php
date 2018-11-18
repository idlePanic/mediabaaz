
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/"><strong class="my-text">Mediabaaz logo</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive" data-parent="#accordin">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item {{(current_page("movies") ? "activ" : '')}}"  >
                    {{--<li class="nav-item activate">--}}
                        <a class="nav-link js-scroll-trigger float-left" href="{{asset(route('movies.index'))}}">Movie</a>
                        {{--<h1>{{current_page('movies')}}</h1>--}}
                    </li>
                    <li class="nav-item {{(current_page("music") ? "activ" : '')}}" >
                        <a class="nav-link js-scroll-trigger" href="{{asset('/about')}}">Music</a>
                    </li>
                    <li class="nav-item {{(current_page("about") ? "activ"  : '')}}" >
                        <a class="nav-link js-scroll-trigger" href="{{asset('/about')}}">About</a>
                    </li>
                    <li class="nav-item {{(current_page("contact") ? "activ" : '')}}">
                        <a class="nav-link js-scroll-trigger" href="{{asset('/contact')}}">Contact</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>

                    @else
                        @if(Auth::user() && Auth::user()->is_admin==1)
                            <li class="nav-item">
                                <a href="/home" class="nav-link text-white"> Admin Panel</a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                <img class="rounded-circle" src="/avatar/{{Auth::user()->avatar}}" style="width: 20px">
                                <strong class="text-white">{{ Auth::user()->name }}</strong> &nbsp;&nbsp;&nbsp;
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" data-parent="#accordin" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{asset('/profile')}}">
                                    {{ __('Profile') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
</div>

<script>

    (function($) {
        "use strict"; // Start of use strict
        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 54)
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
        });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#mainNav',
            offset: 56
        });

        // Collapse Navbar
        var navbarCollapse = function() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);

        // Hide navbar when modals trigger
        $('.portfolio-modal').on('show.bs.modal', function(e) {
            $('.navbar').addClass('d-none');
        })
        $('.portfolio-modal').on('hidden.bs.modal', function(e) {
            $('.navbar').removeClass('d-none');
        })

    })(jQuery); // End of use strict
</script>
