@extends('layouts.master')

@section('title') @lang('translation.Users_edit') @endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- bootstrap datepicker -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
    @slot('li_1') <a href="{{ route('user.index') }}">@lang('translation.Users')</a> @endslot
    @slot('title') @lang('translation.Users_edit') @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Editar el usuario</h4>
                    <form class="needs-validation" action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name">Nombre <span class="text-danger">*</span></label>
                                    <input id="name" name="name" type="text" class="form-control" 
                                        placeholder="Escribir nombre del usuario..." 
                                        value="{{ $user->name }}" 
                                        required
                                    >
                                    <div class="invalid-feedback">
                                        Escriba el Nombre del usuario
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="first_name">Apellido 1</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control"
                                        placeholder="Escribir primer apellido del usuario..." 
                                        value="{{ $user->first_name }}"
                                    >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="last_name">Apellido 2</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control"
                                        placeholder="Escribir segundo apellido del usuario..." 
                                        value="{{ $user->last_name }}"
                                    >
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="dni">DNI</label>
                                    <input id="dni" name="dni" type="text" class="form-control" 
                                        placeholder="Escribir DNI del usuario..." 
                                        value="{{ $user->dni }}"
                                    >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input id="email" name="email" type="text" class="form-control"
                                        placeholder="Escribir Email del usuario..." 
                                        value="{{ $user->email }}"
                                        required
                                    >
                                    <div class="invalid-feedback">
                                        Escriba el Email del usuario
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="tel">Teléfono</label>
                                    <input id="tel" name="tel" type="text" class="form-control"
                                        placeholder="Escribir teléfono del usuario..." 
                                        value="{{ $user->tel }}"
                                    >
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="id_province">Perfil</label>
                                    <select
                                        name="roles"
                                        class="form-control select2"
                                        id="roles" 
                                        required
                                    >
                                        <option value="">-- Seleccione un rol --</option>
                                        @foreach($roles as $role)
                                            <option 
                                                value="{{ $role['name'] }}" 
                                                {{ $user->getUserRole($user->id) == $role['id'] ? 'selected' : '' }} 
                                            >
                                                {{ $role['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Debe asignar un rol
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pass">Contraseña  <span class="text-danger">*</span> <small>(rellenar en caso de cambiar)</small></label>
                                    <input id="pass" min="4" max="50" name="pass" type="password" class="form-control"
                                        placeholder="Escribir contraseña del usuario..." 
                                        value="" 
                                    >
                                    <div class="invalid-feedback">
                                        Debe escribir una contraseña valida
                                    </div>
                                </div>
                            </div>                      
                        </div>
                        <div class="row mb-4">
                            <label class="col-form-label col-lg-2">Imagen <small class="text-danger">(no debe ser superior a 500 Kb)</small></label>
                            <div class="col-lg-12">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3 mt-3">
                                        @if($user->getImageList($user->id))
                                        <img src="{{ $user->getImageList($user->id) }}" style="max-height: 50px">
                                        @else
                                        <img src="{{URL::asset('assets/images/logo-dark.png')}}" style="max-height: 50px">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <button class="btn btn-success" type="submit">Actualizar datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
   <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <!-- form-validation plugin -->
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection


