@extends('layouts.master-landing')

@section('title')
    Free Fee -  Venta sin costes
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <style>
        #img-secc-1-app {
            display: none;
        }
        #img-secc-2-app {
            display: none;
        }
        #content-secc-2-app {
            display: none;
        }
        #img-secc-3-app {
            display: none;
        }
        #content-secc-3-app {
            display: none;
        }
        @media (max-width: 768px) {
        #img-secc-1 {
            display: none;
        }
        #img-secc-1-app {
            display: block;
        }
        #img-secc-2 {
            display: none;
        }
        #img-secc-2-app {
            display: block;
        }
        #content-secc-2 {
            display: none;
        }
        #content-secc-2-app {
            display: block;
        }
        #img-secc-3 {
            display: none;
        }
        #img-secc-3-app {
            display: block;
            padding: 0px 30px 0px 30px;
        }
        #content-secc-3 {
            display: none;
        }
        #content-secc-3-app {
            display: block;
            padding: 0px 30px 0px 30px;
        }

        }
    </style>
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-9">
                        <div class="auth-full-page-content">
                            <div class="row">
                                <div id="img-secc-1" class="col-xl-12 text-center">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/fondoFreefee4.png') }}" alt="" width="100%">
                                    </div>
                                </div>
                                <div id="img-secc-1-app" class="col-xl-12 text-center mt-3">
                                    <div class="mb-4">
                                        <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="120">
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/img-secc-1-app.png') }}" alt="" width="100%">
                                    </div>
                                </div>
                                <hr>
                                <div id="img-secc-2" class="col-md-4 mt-4">
                                    <img src="{{ asset('/assets/images/img-secc-2.png') }}" alt="" style="width: 100%;">
                                </div>
                                <div id="content-secc-2" class="col-md-8 mt-4 p-4">
                                    <h1>Nos encargamos de todo</h1>
                                    <p class="text-landing">
                                            <div class="mb-2"><i class="bx bx-home me-2"></i> VALORACIÓN DEL INMUEBLE</div>
                                            <div class="mb-2"><i class="bx bx-images me-2"></i> FOTOS PROFESIONALES</div>
                                            <div class="mb-2"><i class="bx bx-video me-2"></i> VIDEOS (OPCIÓN DE MATTERPORT 3D REAL SI REQUIERE LA FINCA)</div>
                                            <div class="mb-2"><i class="bx bx-buildings me-2"></i>  ELABORACIÓN DE PLANOS (SI REQUIERE)</div>
                                            <div class="mb-2"><i class="bx bx-certification me-2"></i>  CERTIFICADO DE EFICIENCIA ENEREGÉTICA DE LA VIVIENDA (CEE)</div>
                                            <div class="mb-2"><i class="bx bx-cloud-upload me-2"></i>  SUBIR A PORTALES</div>
                                            <div class="mb-2"><i class="bx bx-store-alt me-2"></i>  ACCIONES DE MÁRKETING</div>
                                            <div class="mb-2"><i class="bx bx-user me-2"></i>  GESTIÓN DE VISITAS</div>
                                            <div class="mb-2"><i class="bx bx-file me-2"></i>  TRAMITAR DOCUMENTOS NECESARIOS PARA LA VENTA</div>
                                            <div class="mb-2"><i class="bx bx-briefcase me-2"></i>  NEGOCIACIONES CON COMPRADORES</div>
                                            <div class="mb-2"><i class="bx bx-edit me-2"></i>  ELABORACIÓN DE CONTRATOS</div>
                                            <div class="mb-2"><i class="bx bxs-user-detail me-2"></i>  ACOMPAÑAMIENTO EN NOTARÍA</div>
                                            <div class="mb-2"><i class="bx bx-notepad me-2"></i>  GESTIONES POST VENTA</div>
                                    </p>
                                </div>
                                <div id="content-secc-2-app" class="col-md-8 p-4 text-center">
                                    <h1>Nos encargamos <br />de todo</h1>
                                    <p class="text-landing text-center">
                                            <div class="mb-3  text-center"><i class="bx bx-home bx-md"></i><br />VALORACIÓN DEL INMUEBLE</div>
                                            <div class="mb-3  text-center"><i class="bx bx-images bx-md"></i><br />FOTOS PROFESIONALES</div>
                                            <div class="mb-3  text-center"><i class="bx bx-video bx-md"></i><br />VIDEOS (OPCIÓN DE MATTERPORT 3D REAL SI REQUIERE LA FINCA)</div>
                                            <div class="mb-3  text-center"><i class="bx bx-buildings bx-md"></i><br />ELABORACIÓN DE PLANOS (SI REQUIERE)</div>
                                            <div class="mb-3  text-center"><i class="bx bx-certification bx-md"></i><br />CERTIFICADO DE EFICIENCIA ENEREGÉTICA DE LA VIVIENDA (CEE)</div>
                                            <div class="mb-3  text-center"><i class="bx bx-cloud-upload bx-md"></i><br />SUBIR A PORTALES</div>
                                            <div class="mb-3  text-center"><i class="bx bx-store-alt bx-md"></i><br />ACCIONES DE MÁRKETING</div>
                                            <div class="mb-3  text-center"><i class="bx bx-user bx-md"></i><br />GESTIÓN DE VISITAS</div>
                                            <div class="mb-3  text-center"><i class="bx bx-file bx-md"></i><br />TRAMITAR DOCUMENTOS NECESARIOS PARA LA VENTA</div>
                                            <div class="mb-3  text-center"><i class="bx bx-briefcase bx-md"></i><br />NEGOCIACIONES CON COMPRADORES</div>
                                            <div class="mb-3  text-center"><i class="bx bx-edit bx-md"></i><br />ELABORACIÓN DE CONTRATOS</div>
                                            <div class="mb-3  text-center"><i class="bx bxs-user-detail bx-md"></i><br />ACOMPAÑAMIENTO EN NOTARÍA</div>
                                            <div class="mb-3  text-center"><i class="bx bx-notepad bx-md"></i><br />GESTIONES POST VENTA</div>
                                    </p>
                                </div>
                               
                                <div id="img-secc-2-app" class="col-md-4">
                                    <img src="{{ asset('/assets/images/img-secc-2-app.png') }}" alt="" style="width: 100%;">
                                </div>
                                <hr>
                                <div id="content-secc-3" class="col-md-6 mt-4 p-5">
                                    <h1>Videos 3D</h1>
                                    <p class="text-landing">
                                        Gracias a las visitas virtuales, ofrecemos a nuestros clientes la oportunidad de explorar las propiedades de manera inmersiva y realista desde la comodidad de sus hogares. Utilizando tecnología de realidad y recorrido virtuales 3D de Matterport, nuestros clientes pueden realizar visitas virtuales a las propiedades que les interesan, explorando cada rincón y detalle como si estuvieran allí en persona, lo que facilita la toma de decisiones informadas y reduce la necesidad de visitas físicas.
                                    </p>
                                </div>
                                <div id="img-secc-3" class="col-md-6 mt-4 p-5" style="height: 357px;">
                                    <iframe src="https://my.matterport.com/show/?m=RsKKA9cRJnj" frameborder="0" width="100%" height="350"></iframe>
                                </div>

                                <div id="content-secc-3-app" class="col-md-6 text-center">
                                    <h1>Videos 3D</h1>
                                    <p class="text-landing">
                                        Gracias a las visitas virtuales, ofrecemos a nuestros clientes la oportunidad de explorar las propiedades de manera inmersiva y realista desde la comodidad de sus hogares. Utilizando tecnología de realidad y recorrido virtuales 3D de Matterport, nuestros clientes pueden realizar visitas virtuales a las propiedades que les interesan, explorando cada rincón y detalle como si estuvieran allí en persona, lo que facilita la toma de decisiones informadas y reduce la necesidad de visitas físicas.
                                    </p>
                                </div>
                                <div id="img-secc-3-app" class="col-md-6 mb-2" style="height: 357px;">
                                    <iframe src="https://my.matterport.com/show/?m=RsKKA9cRJnj" frameborder="0" width="100%" height="350"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 bg-light">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column">
                                    <div class="mb-4 mb-md-12" style="text-align: center;">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="90"
                                                class="auth-logo-dark">
                                            <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="90"
                                                class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        <h3>NO TODOS LOS DIAS TE REGALAN UN CARAMELITO</h3>
                                        <div>
                                            <h4 class="text-freefee mt-3">¿Lo hacemos posible?</h4>
                                        </div>

                                        <div class="mt-2">
                                            <form method="POST" class="form-horizontal" action="{{ route('contacto') }}" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                                    value="{{ old('name') }}" name="name" placeholder="Indique su nombre" autofocus required>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="tel" class="form-label">Teléfono</label>
                                                    <input type="text" class="form-control @error('tel') is-invalid @enderror" id="tel"
                                                    value="{{ old('tel') }}" name="tel" placeholder="Indique su teléfono" autofocus required>
                                                    @error('tel')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
        
                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Contacta con Freefee</button>
                                                </div>

                                                @if($alert)
                                                <div class="alert alert-success alert-dismissible fade show mt-3 " role="alert">
                                                    {{ $alert }}
                                                  </div>
                                                @endif

                                                <div class="mt-4 text-left">
                                                    <p class="mb-2">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="privacy" required>
                                                        <label class="form-check-label" for="privacy">
                                                            Aceptar <a href="/terminos" target="_blank" class="text-info">Política de protección de datos</a>
                                                        </label>
                                                    </p>
                                                    <p class="mb-0">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="cookies" required>
                                                        <label class="form-check-label" for="cookies">
                                                            Aceptar <a href="/cookies" target="_blank" class="text-info">Politica de cookies</a>
                                                        </label>
                                                        
                                                    </p>
                                                </div>
        
                                                <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Síguenos en redes</h5>
        
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="https://www.facebook.com/profile.php?id=61556266213078" target="_blank"
                                                                class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>

                                                        <li class="list-inline-item">
                                                            <a href="https://www.instagram.com/freefee.es/" target="_blank"
                                                                class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                                
                                            </form>

                                        </div>
                                    </div>

                                    <div class="mt-4 mb-3 mt-md-3 text-center">
                                        <p class="mb-0">© <script>
                                                document.write(new Date().getFullYear())

                                            </script> Free Fee</p>

                                            <p class="mt-3">
                                                By <a href="https://fincax.es/" target="_blank"><img src="{{ asset('/assets/images/logo_hr2.png') }}" alt="" style="width: 120px;"></a>
                                            </p>
                                    </div>
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
        <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1a5e3149-2df9-46e6-8805-0b8920be6264" data-blockingmode="auto" type="text/javascript"></script>

        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
        
    @endsection
