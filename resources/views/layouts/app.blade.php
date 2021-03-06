<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}asset/admin/favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{ asset('/') }}asset/admin/vendor/pace/pace.min.js"></script>
    <link href="{{ asset('/') }}asset/admin/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/magnific-popup/magnific-popup.css">
    <!--dataTable-->
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}asset/admin/stylesheets/css/style.css">


</head>

<body>
<div class="wrap">
    <!-- page HEADER -->
    <!-- ========================================================= -->
    <div class="page-header">
        <!-- LEFTSIDE header -->
        <div class="leftside-header">
            <div class="logo">
                <a href="{{ route('home') }}" class="on-click">
                    <img alt="logo" src="{{ asset('/') }}asset/admin/images/header-logo.png" />
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <!-- RIGHTSIDE header -->
        <div class="rightside-header">
            <div class="header-middle"></div>
            <!--SEARCH HEADERBOX-->
            <div class="header-section" id="search-headerbox">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                <div class="header-separator"></div>
            </div>
            <!--USER HEADERBOX -->
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img alt="profile photo" src="{{ asset('/') }}asset/admin/images/avatar/avatar_user.jpg" />
                    </div>
                    <div class="user-info">
                        {{-- <span class="user-name">{{ auth::user()->name }}</span> --}}
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
            <!--Log out -->
            <div class="header-section">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}<i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body">
        <!-- LEFT SIDEBAR -->
        <!-- ========================================================= -->
        <div class="left-sidebar">
            <!-- left sidebar HEADER -->
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <!-- NAVIGATION -->
            <!-- ========================================================= -->
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav nav-left-lines" id="main-nav">
                            <!--HOME-->
                            <li class="{{ request()->is('home') ? 'active-item':'' }}"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                            <!--UI ELEMENTENTS-->
                            <li class="has-child-item close-item {{ request()->is('brand/*') ? 'open-item':'' }}">
                                <a><i class="fa fa-list" aria-hidden="true"></i><span>Brand</span></a>
                                <ul class="nav child-nav level-1">
                                    <li class="{{ request()->is('brand/add-brand','brand/edit-brand/*') ? 'active-item':'' }}"><a href="{{ route('add-brand') }}">Add Brand</a></li>
                                    <li class="{{ request()->is('brand/manage-brand') ? 'active-item':'' }}"><a href="{{ route('manage-brand') }}">Manage Brand</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <!-- ========================================================= -->
        <div class="content">
            <!-- content HEADER -->
            @yield('content')
        </div>
        <!--scroll to top-->
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{ asset('/') }}asset/admin/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{ asset('/') }}asset/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}asset/admin/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{ asset('/') }}asset/admin/javascripts/template-script.min.js"></script>
<script src="{{ asset('/') }}asset/admin/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
<!--Notification msj-->
<script src="{{ asset('/') }}asset/admin/vendor/toastr/toastr.min.js"></script>
<!--morris chart-->
<script src="{{ asset('/') }}asset/admin/vendor/chart-js/chart.min.js"></script>
<!--Gallery with Magnific popup-->
<script src="{{ asset('/') }}asset/admin/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!--dataTable-->
<script src="{{ asset('/') }}asset/admin/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}asset/admin/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<!--Examples-->
<script src="{{ asset('/') }}asset/admin/javascripts/examples/tables/data-tables.js"></script>
<!--Examples-->
<script src="{{ asset('/') }}asset/admin/javascripts/examples/dashboard.js"></script>
</body>

</html>


{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
