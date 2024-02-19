<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Freefee - APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/fav.ico') }}">
    @include('layouts.head-css')
    <style>
        .text-primary {
            color: #000;
        }
        body[data-sidebar=dark] #sidebar-menu ul li a {
            color: #999999;
        }
        body[data-sidebar=dark] #sidebar-menu ul li a:hover {
            color: #000;
        }
        body[data-sidebar=dark] .mm-active, body[data-sidebar=dark] .mm-active .active, body[data-sidebar=dark] .mm-active .active i, body[data-sidebar=dark] .mm-active>a, body[data-sidebar=dark] .mm-active>a i, body[data-sidebar=dark] .mm-active>i, body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active, body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active i {
            color: #000!important;
        }
        body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a {
            background: #f1f1f1;
            color: #000;
        }
        body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu>ul ul {
            background-color: #f1f1f1;
        }
        body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a {
            color: #000;
        }
        body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a:hover {
            color: #999999;
        }
    </style>
</head>

@section('body')
    <body data-topbar="dark" data-layout="horizontal">
@show

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.horizontal')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            @include('layouts.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- END Right Sidebar -->

    @include('layouts.vendor-scripts')
</body>

</html>
