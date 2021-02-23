<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />
    {{-- @yield('css') --}}
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    {{-- @include('css') --}}
    <script src="https://kit.fontawesome.com/4ea06e897a.js" crossorigin="anonymous"></script>
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }}" width="48"
                    height="48" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div> --}}

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="/"><img src="{{ asset('assets/img/logo.png') }}" width="25" alt="Aero"><span class="m-l-10">PR
                    Architect</span></a>
        </div>
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <a class="image" href="#"><img
                                src="https://cdn4.iconfinder.com/data/icons/basic-interface-overcolor/512/user-512.png"
                                alt="User"></a>
                        <div class="detail">

                            {{-- <h4>User's Name</h4> --}}
                            <h4>{{ Auth::user()->name }}</h4>
                            {{-- <small>User's Email</small>
                            --}}
                            <small>{{ Auth::user()->email }}</small>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('carousel.add') }}"><i class="zmdi zmdi-view-carousel"></i><span>Carousels</span></a></li>
                <li><a href="{{ route('gallary.add') }}"><i class="zmdi zmdi-collection-folder-image"></i><span>Gallary</span></a></li>
                <li><a href="{{ route('services.add') }}"><i class="zmdi zmdi-album"></i><span>Services</span></a></li>
                <li><a href="{{ route('projects.add') }}"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a></li>
                <li><a href="{{ route('about.list') }}"><i class="zmdi zmdi-assignment"></i><span>About Blocks</span></a></li>
                <li><a href="{{ route('setting') }}"><i class="zmdi zmdi-assignment"></i><span>Setting</span></a></li>
                {{-- <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-image"></i><span>Gallary</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{ route('gallary.add') }}">Add </a></li>
                        <li><a href="blog-post.html">List</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                </li> --}}
                {{-- <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-hd"></i><span>Servics</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{ route('services.add') }}">Services Add</a></li>
                        <li><a href="project-list.html">Services List</a></li>
                    </ul>
                </li> --}}
                {{-- <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                            {{-- <i class="ti ti"></i> --}}
                    <ul class="ml-menu">
                        <li><a href="blog-dashboard.html">Add Blog</a></li>
                        <li><a href="blog-post.html">List Blogs</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('admin.logout') }}"><i class="zmdi zmdi-sign-in"></i><span>
                            <form method="POST" action="" style="display:inline;">
                                @csrf
                                <input type="submit" value="logout"
                                    style="display:inline;background:transparent;border:none;">
                            </form>
                        </span></a>
                </li>
                {{-- <div class="fo">

                </div> --}}

            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <section class="content">

        <div class="body_scroll">
            <div class="block-header">

                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>@yield('title')</h2>
                        <ul class="breadcrumb">
                            @yield('breadcrumb')
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>@yield('header')</h2>
                            </div>
                            <div class="body">
                                <div class="pt-2 pb-2">
                                    @yield('toolbar')
                                </div>
                                <div class="pt-2 pb-2">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        @endforeach
                                    @endif
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.href').click(function() {
            window.location.href = $(this).data('target');
        });

    </script>
    <script src="{{ asset('assets/js/pages/ui/notifications.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    {{-- JS for gallary add form --}}
    <script>
        function triggerClick(){
            document.querySelector('#profilepic').click();
        }

        function displayImage(e){
            if (e.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e){
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>

    @yield('js')
</body>

</html>
