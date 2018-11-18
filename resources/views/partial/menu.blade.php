

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Media Baaz</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a>
                    <i class="fa fa-home">Home</i>
                </a>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-film"></i>movie
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu" data-parent="accordin">
                    <li><a href="#">Home 1</a></li>
                    <li><a href="#">Home 2</a></li>
                    <li><a href="#">Home 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-music"></i>Music</a>
                <ul class="collapse list-unstyled" id="pageSubmenu" data-parent="accordin">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->

</div>
<script>




    $(document).ready(function () {
        $(window).scroll(function () {

            if($(window).scrollTop() > 200) {
                $('#sidebar').css('position','fixed');
                $('#sidebar').css('top','0');
            }

            else if ($(window).scrollTop() <= 200) {
                $('#sidebar').css('position','');
                $('#sidebar').css('top','');
            }
            if ($('#sidebar').offset().top + $("#sidebar").height() > $("#footer").offset().top) {
                $('#sidebar').css('top',-($("#sidebar").offset().top + $("#sidebar").height()  - $("#footer").offset().top));
            }
        });


        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });



</script>
