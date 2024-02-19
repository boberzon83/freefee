@extends('layouts.master')

@section('title') @lang('translation.Companies_create') @endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- bootstrap datepicker -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
    @slot('li_1') <a href="{{ route('company.index') }}">@lang('translation.Companies')</a> @endslot
    @slot('title') @lang('translation.Companies_create') @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name">Nombre <span class="text-danger">*</span></label>
                                    <input id="name" name="name" type="text" class="form-control" 
                                        placeholder="Escribir nombre..." required>
                                    <div class="invalid-feedback">
                                        Escriba el Nombre de la empresa
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="business_name">Razón Social</label>
                                    <input id="business_name" name="business_name" type="text" class="form-control"
                                        placeholder="Escribir razón social...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="cif">CIF <span class="text-danger">*</span></label>
                                    <input id="cif" name="cif" type="text" class="form-control"
                                        placeholder="Escribir cif..." required>
                                    <div class="invalid-feedback">
                                        Escriba el CIF de la empresa
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="address">Dirección</label>
                                    <input id="address" name="address" type="text" class="form-control" 
                                        placeholder="Escribir dirección...">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="zip">CP</label>
                                    <input id="zip" name="zip" type="text" class="form-control" 
                                        placeholder="Escribir código postal...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="id_province">Provincia</label>
                                    <select
                                        name="id_province"
                                        class="form-control select2"
                                        id="id_province"
                                    >
                                        <option value="">-- Seleccione una provincia --</option>
                                        @foreach($provinces as $province)
                                            <option 
                                                value="{{ $province->id }}"
                                                {{ old('id_province') == $province->id ? 'selected' : '' }} 
                                            >
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                            
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="id_town">Municipio</label>
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
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" parsley-type="email"
                                        placeholder="Escribir Email" required />
                                    <div class="invalid-feedback">
                                        Debe indicar un email correcto
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="tel">Teléfono</label>
                                    <input id="tel" name="tel" type="text" class="form-control"
                                        placeholder="Escribir teléfono...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="catalogs">Nº Catálogos disponibles</label>
                                    <input id="catalogs" name="catalogs" type="number" step="1" min="-1" max="100" class="form-control"
                                        placeholder="Indicar total..." value="5">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-form-label col-lg-12">Imagen</label>
                            <div class="col-lg-12">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3 mt-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <button class="btn btn-success" type="submit">Crear Empresa</button>
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


