<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | El estilo empieza en casa </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & APP" name="description" />
    <meta content="Freefee" name="author" />
    <!-- App favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla&family=Tilt+Neon&display=swap" rel="stylesheet">
    <!--chkEditor para el Blog-->
    <!--<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>-->
    <script src="https://cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>

    @include('layouts.head-css')
    <style>
        body {
            /*font-family: 'Karla', sans-serif;*/
            font-family: 'Tilt Neon', cursive;

        }
        .text-primary {
            color: #000;
        }
        .btn-primary {
            background-color: #2e7eac;
            border-color: #2e7eac;
            color: #fff;
        }
        .btn-primary.disabled, .btn-primary:disabled {
            background-color: #4e82a0;
            border-color: #4e82a0;
            color: #fff;
        }
        .btn-check:active+.btn-primary, .btn-check:checked+.btn-primary, .btn-primary.active, .btn-primary:active, .show>.btn-primary.dropdown-toggle {
            background-color: #1e5c7f;
            border-color: #6e869f;
            color: #fff;
        }
        body[data-sidebar=dark] #sidebar-menu ul li a {
            color: #999999;
        }
        body[data-sidebar=dark] #sidebar-menu ul li a:hover {
            color: #000;
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
        .text-freefee {
            color: #01abd1;
        }
        .chat-conversation .conversation-list .ctext-wrap {
            background-color: #f1f1f1;
            border-radius: 8px 8px 8px 0;
            overflow: hidden;
            padding: 12px 24px;
        }
        .chat-conversation .conversation-list .ctext-wrap-user {
            background-color: #d2fbd4;
            border-radius: 8px 8px 8px 0;
            overflow: hidden;
            padding: 12px 24px;
        }
        .bootstrap-select .dropdown-menu {
            width: 100%;
        }
        .bootstrap-select .dropdown-menu li small {
            white-space: normal;
        }

        body[data-sidebar=dark] .mm-active, body[data-sidebar=dark] .mm-active .active, body[data-sidebar=dark] .mm-active .active i, body[data-sidebar=dark] .mm-active>a, body[data-sidebar=dark] .mm-active>a i, body[data-sidebar=dark] .mm-active>i, body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active, body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active i {
            color: #01abd1!important;
        }

    </style>
</head>

@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                    @yield('modals')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
</body>

</html>
