@extends('layouts.master')

@section('title') Mi cuenta @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Perfil @endslot
@slot('title') Mi cuenta @endslot
@endcomponent

<a href="" class="btn btn-primary waves-effect waves-light me-2" data-bs-toggle="modal" data-bs-target=".update-profile">Editar datos</a>
<div class="row mt-3">
    

    <div class="col-xl-12">

        <div class="row">
            {{--Solo visible para admin y Operadores--}}
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Distribuidores activos</p>
                                <h4 class="mb-0">25</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bx-package text-info font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Clientes activos</p>
                                <h4 class="mb-0">123</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bxs-city text-success font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Compras confirmadas</p>
                                <h4 class="mb-0">23.250€</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bxs-bank text-warning font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Últimos distribuidores activos</h4>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cif</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <th scope="row"><span class="text-secondary">COMERCIAL ADDUCO S.L.</span></th>
                                        <td>B11703352</td>
                                        <td>adduco_61@hotmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">MI SUPER ALBEYCO, S.A.	</span></th>
                                        <td>A11387800</td>
                                        <td>superalbeyco@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">COMERCIAL PELAEZ</span></th>
                                        <td>B29956109</td>
                                        <td>admimelianse@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">DISTRIBUCIONES MARTIN ACERA S.L.</span></th>
                                        <td>B37039948</td>
                                        <td>ofina14959@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">COSTA FERMONT S.L.</span></th>
                                        <td>B92053743</td>
                                        <td>raranda@costafermont.com</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Últimos clientes activos</h4>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cif</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <th scope="row"><span class="text-secondary">SALON DE JUEGO TRIANA</span></th>
                                        <td>ES44235888B</td>
                                        <td>dominguezcubero@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">BAR MACHUCA</span></th>
                                        <td>ES28796780K</td>
                                        <td>barmachuca@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">CAFETERIA POLIDEPORTIVO</span></th>
                                        <td>ESB21587712</td>
                                        <td>cafepolideportivo@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">HOSTAL MONTELUNA</span></th>
                                        <td>ES48941512L</td>
                                        <td>distribuciones.macario@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><span class="text-secondary">E.S. REPSOL GUILLENA</span></th>
                                        <td>ES48811581S</td>
                                        <td>repsolguillena@gmail.com</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!--  Update Profile example -->
<div class="modal fade update-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Editar datos del perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update_profile', ['user' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')
                    <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                    <div class="mb-3">
                        <label for="useremail" class="form-label">Mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ Auth::user()->email }}" name="email" placeholder="Indica el mail" autofocus>
                        <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" id="username" name="name" autofocus placeholder="Indica el nombre">
                        <div class="text-danger" id="nameError" data-ajax-feedback="name"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userape1" class="form-label">1º Apellido</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ Auth::user()->first_name }}" id="userape1" name="first_name" autofocus placeholder="Indica el primer apellido">
                        <div class="text-danger" id="nameError" data-ajax-feedback="first_name"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userape2" class="form-label">2º Apellido</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ Auth::user()->last_name }}" id="userape2" name="last_name" autofocus placeholder="Indica el segundo apellido">
                        <div class="text-danger" id="nameError" data-ajax-feedback="last_name"></div>
                    </div>

                    <div class="mb-3 d-none">
                        <label for="userdob">Fecha de nacimiento</label>
                        <div class="input-group" id="datepicker1">
                            <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ date('d-m-Y', strtotime(Auth::user()->dob)) }}" data-provide="datepicker" name="dob" autofocus id="dob">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                        </div>
                        <div class="text-danger" id="dobError" data-ajax-feedback="dob"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userape2" class="form-label">Cambiar contraseña</label>
                        <input id="pass" min="4" max="50" name="pass" type="password" class="form-control"
                                        placeholder="Actualizar contraseña del usuario..."
                                        value="">
                        <label for="pass"><small>(rellenar en caso de necesitar cambiarla)</small></label>
                    </div>

                    <div class="mb-3">
                        <label for="avatar">Imagen de perfil</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" autofocus>
                            <label class="input-group-text" for="avatar">Upload</label>
                        </div>
                        <div class="text-start mt-2">
                            <img src="{{ isset(Auth::user()->image) ? asset('storage/'.Auth::user()->image) : asset('/assets/images/fav.ico') }}" alt="" class="rounded-circle avatar-lg">
                        </div>
                        <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdateProfile" data-id="{{ Auth::user()->id }}" type="submit">Actualizar perfil</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- profile init -->
<script src="{{ URL::asset('/assets/js/pages/profile.init.js') }}"></script>

<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#dobError').text('');
        $('#avatarError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#dobError').text('');
                $('#avatarError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#dobError').text(response.responseJSON.errors.dob);
                $('#avatarError').text(response.responseJSON.errors.avatar);
            }
        });
    });
</script>

@endsection
