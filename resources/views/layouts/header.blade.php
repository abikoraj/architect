<!-- ================Offcanvus Menu Area =================-->
<div class="side_menu">
    <ul class="list menu_right">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="about">About</a>
        </li>
        <li>
            <a href="gallary">Gallary</a>
        </li>
        <li>
            <a href="projects">Projects</a>
        </li>
        <li>
            <a href="services">Service</a>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="list">
                <li>
                    <a href="elements.html">Elements</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Blog</a>
            <ul class="list">
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="single-blog.html">Blog Details</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
    </ul>
</div>

<div class="d-none d-lg-block" style="position:absolute;top:0px;right:0px;left:0px;z-index:2;">
    <div class="d-flex justify-content-center p-3">
        <div class="w-75" style="background-color: #F9CC41;border-radius:5px;padding:20px;">
            <div class="d-flex justify-content-center text">
                <a href="/">Home</a>
                <a href="about">About</a>
                {{-- <a href="gallary">Gallary</a> --}}
                <a href="gallary">Portfolio</a>
                <span style="width: 150px;"></span>
                <a href="projects">Service</a>
                <a href="blog.html">Blog</a>
                <a href="contact">Contact</a>
            </div>
        </div>
    </div>
</div>
<!--================End Offcanvus Menu Area =================-->

<!--================Canvus Menu Area =================-->
<div class="canvus_menu d-none">
    <div class="container">
        <div class="float-right">
            <div class="toggle_icon" title="Menu Bar">
                <span></span>
            </div>
        </div>
    </div>
</div>
<!--================End Canvus Menu Area =================-->

<!--================Brand Logo Area =================-->
<a class="navbar-brand shadow my-2 px-3" href="/" style="left:50%;transform: translateX(-50%);background-color: #F9CC41">
    <img src="{{ asset('assets/img/pr-logo.png') }}" alt="">
</a>
<!--================Brand Logo Area =================-->
