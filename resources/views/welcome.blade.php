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
                    <div class="col-xl-9">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="row">
                                <div class="col-xl-3 mb-3 text-center">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="130">
                                    </div>
                                </div>
                                <div class="col-xl-9 mb-3">
                                    <div>
                                        <h1 class="text-secondary  text-center">Contrata un agente inmobiliario con todas sus costosas acciones por 0 euros!!!</h1>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-3 mt-4">
                                    <img src="{{ asset('/assets/images/fondo5.jpg') }}" alt="" style="width: 100%;">
                                </div>
                                <div class="col-md-9 mt-4">
                                    <h1>Sin Comisiones. Todo gratis</h1>
                                    <p class="text-landing">
                                            <div class="mb-1"><i class="bx bx-images me-2"></i> FOTOS PROFESIONALES</div>
                                            <div class="mb-1"><i class="bx bx-video me-2"></i> VIDEOS (OPCIÓN DE MATTERPORT 3D REAL SI REQUIERE LA FINCA)</div>
                                            <div class="mb-1"><i class="bx bx-buildings me-2"></i>  ELABORACIÓN DE PLANOS (SI REQUIERE)</div>
                                            <div class="mb-1"><i class="bx bx-certification me-2"></i>  CERTIFICADO DE EFICIENCIA ENEREGÉTICA DE LA VIVIENDA (CEE)</div>
                                            <div class="mb-1"><i class="bx bx-cloud-upload me-2"></i>  SUBIR A PORTALES</div>
                                            <div class="mb-1"><i class="bx bx-store-alt me-2"></i>  ACCIONES DE MÁRKETING</div>
                                            <div class="mb-1"><i class="bx bx-user me-2"></i>  GESTIÓN DE VISITAS</div>
                                            <div class="mb-1"><i class="bx bx-file me-2"></i>  TRAMITAR DOCUMENTOS NECESARIOS PARA LA VENTA</div>
                                            <div class="mb-1"><i class="bx bx-briefcase me-2"></i>  NEGOCIACIONES CON COMPRADORES</div>
                                            <div class="mb-1"><i class="bx bx-edit me-2"></i>  ELABORACIÓN DE CONTRATOS</div>
                                            <div class="mb-1"><i class="bx bxs-user-detail me-2"></i>  ACOMPAÑAMIENTO EN NOTARÍA</div>
                                            <div class="mb-1"><i class="bx bx-notepad me-2"></i>  GESTIONES POST VENTA</div>
                                    </p>
                                </div>
                                <hr class="mt-4">
                                <div class="col-md-6 mt-4">
                                    <h1>Videos 3D</h1>
                                    <p class="text-landing">
                                        Gracias a las visitas virtuales, ofrecemos a nuestros clientes la oportunidad de explorar las propiedades de manera inmersiva y realista desde la comodidad de sus hogares. Utilizando tecnología de realidad y recorrido virtuales 3D de Matterport, nuestros clientes pueden realizar visitas virtuales a las propiedades que les interesan, explorando cada rincón y detalle como si estuvieran allí en persona, lo que facilita la toma de decisiones informadas y reduce la necesidad de visitas físicas.
                                    </p>
                                </div>
                                <div class="col-md-6 mt-4" style="height: 357px;">
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
                                            <h4 class="text-freefee mt-3">Contáctanos</h4>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" class="form-horizontal" action="{{ route('register') }}" enctype="multipart/form-data">
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

                                                <div class="mb-3">
                                                    <label for="tel" class="form-label">Municipio</label>
                                                    <select
                                                        name="id_town"
                                                        class="form-control select2"
                                                        id="id_town"
                                                    >
                                                        <option value="">-- Seleccione un municipio --</option>
                                                        @foreach($towns as $town)
                                                            <option 
                                                                value="{{ $town->id }}"
                                                                {{ old('id_town') == $town->id ? 'selected' : '' }} 
                                                            >
                                                                {{ $town->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
        
                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Contacta con Freefee</button>
                                                </div>
        
                                                <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Síguenos en redes</h5>
        
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-primary text-white border-primary">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-google"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                                <div class="mt-4 text-center">
                                                    <p class="mb-0">Al contactar aceptas los <a href="#"
                                                        class="text-info">Términos y condiciones de uso</a></p>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="mt-4 mb-3 mt-md-3 text-center">
                                        <p class="mb-0">© <script>
                                                document.write(new Date().getFullYear())

                                            </script> Free Fee</p>
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
        <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
        
    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    @endsection
