<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | Freefee - APP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="VENTA SIN COSTES" name="description" />
        <meta content="Roberto Naranjo" name="author" />
        <!-- App favicon -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png')}}">
        <link rel="icon" type="image/jpg" href="{{ URL::asset('assets/images/favicon.png')}}"/>
        @include('layouts.head-css')
        <style>
            .text-primary {
                color: #000;
            }

            .bg-primary {
                background: #01abd1;
            }

            .btn-primary {
                background: #01abd1;
            }
            .text-freefee {
                color: #01abd1;
            }
            body {
                /*font-family: 'Karla', sans-serif;*/
                font-family: "Fredoka", sans-serif;
                font-size: 15px;
                background-color: #fff;                
                background: #fff;      
                color: #666;          
            }
            h1, h2, h3, h4, h5, p {
                /*font-family: 'Karla', sans-serif;*/
                font-family: "Fredoka", sans-serif;
            }
            h1 {
                font-size: 40px;
                color: #01abd1;
            }
            h2 {
                font-size: 24px;
                color: #666;
            }
            h5 {
                font-size: 14px;
                color: #666;
            }
            .text-landing {
                text-transform: uppercase;
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
            .chat-conversation .conversation-list .ctext-wrap {
                background-color: #f1f1f1;
                border-radius: 8px 8px 8px 0;
                overflow: hidden;
                padding: 12px 24px;
            }
            .chat-conversation .conversation-list .ctext-wrap-user {
                background-color: #01abd1;
                border-radius: 8px 8px 8px 0;
                overflow: hidden;
                padding: 12px 24px;
            }
        </style>
  </head>

    @yield('body')
    
    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>