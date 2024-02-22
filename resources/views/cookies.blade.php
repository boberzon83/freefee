@extends('layouts.master-landing')

@section('title')
    Free Fee -  Venta sin costes
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-12">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="row">
                                <div class="col-xl-12 mb-3 text-center">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="130">
                                    </div>
                                </div>
                                <h2 class="text-primary mb-4">Política de cookies</h2>
                                <div>
                                    <span>
                                        <h2>¿Qué son las cookies?</h2>
                                        <p>Las cookies y tecnologías similares son documentos de texto muy pequeños o fragmentos de código que a menudo contienen un código de identificación único. Cuando visitas un sitio web o utilizas una aplicación móvil, un ordenador le pide permiso a tu ordenador o dispositivo móvil para guardar este archivo en tu ordenador o dispositivo móvil y obtener acceso a la información. La información recopilada a través de cookies y tecnologías similares puede incluir la fecha y hora de la visita y la forma en que utilizas un sitio web o una aplicación móvil en particular.</p>
                                        <h2>Por qué utilizamos cookies?</h2>
                                        <p>Las cookies aseguran que durante tu visita a nuestra tienda en línea permanezcas conectado, que todos los artículos permanezcan almacenados en tu carrito de compras, que puedas comprar de forma segura y que el sitio web siga funcionando sin problemas. Las cookies también aseguran que podamos ver cómo se utiliza nuestro sitio web y cómo podemos mejorarlo. Además, dependiendo de tus preferencias, nuestras propias cookies pueden ser utilizadas para presentarte anuncios específicos que coincidan con tus intereses personales.</p>
                                        <h2>¿Qué tipo de cookies utilizamos?</h2>
                                        <h3>Cookies necesarias</h3>
                                        <p>Estas cookies son necesarias para que el sitio web funcione correctamente. Algunas de las siguientes acciones se pueden realizar utilizando estas cookies: - Almacenar artículos en un carrito de compras para compras en línea - Guardar tus preferencias de cookies para este sitio web - Guardar preferencias de idioma - Iniciar sesión en nuestro portal. Tenemos que comprobar si has iniciado sesión.</p>
                                        <h3>Cookies de rendimiento</h3>
                                        <p>Estas cookies se utilizan para recopilar información estadística sobre el uso de nuestro sitio web, también llamadas cookies analíticas. Utilizamos estos datos para el rendimiento y la optimización del sitio web.</p>
                                        <h3>Cookies funcionales</h3>
                                        <p>Estas cookies permiten una mayor funcionalidad para los visitantes de nuestro sitio web. Estas cookies pueden ser establecidas por nuestros proveedores de servicios externos o por nuestro propio sitio web. Las siguientes funcionalidades pueden o no ser activadas cuando aceptes esta categoría.- Servicios de chat en vivo - Ver videos en línea - Botones para compartir redes sociales - Iniciar sesión en nuestro sitio web con redes sociales.</p>
                                        <h3>Publicidad / cookies de seguimiento</h3>
                                        <p>Estas cookies son establecidas por socios publicitarios externos y se utilizan para crear perfiles y realizar un seguimiento de los datos en varios sitios web. Si aceptas estas cookies, podemos mostrar nuestros anuncios en otros sitios web en función de tu perfil de usuario y preferencias. Estas cookies también guardan datos sobre cuántos visitantes han visto o hecho clic en nuestros anuncios con el fin de optimizar las campañas publicitarias.</p>
                                        <h3>Sin clasificar</h3>
                                        <p>Estas cookies están todavía en proceso de clasificación. Aparecerán en una de las siguientes categorías: Necesarias, De Rendimiento, Funcionales o de Publicidad.</p>
                                        <h2>¿Cómo puedo desactivar o eliminar las cookies?</h2>
                                        <p>Puedes optar por no utilizar todas las cookies, excepto las necesarias. En la configuración del navegador, puedes cambiar la configuración para asegurarte de que se bloqueen las cookies. La mayoría de los navegadores te ofrecen una explicación sobre cómo hacerlo en la llamada 'función de ayuda'. Sin embargo, si bloqueas las cookies, es posible que no puedas disfrutar de todas las características técnicas que nuestro sitio web tiene para ofrecer y puede afectar negativamente a tu experiencia de usuario.</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
        
    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    @endsection
