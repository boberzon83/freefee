@extends('layouts.master')

@section('title') @lang('translation.Companies_destroy') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') <a href="{{ route('company.index') }}">@lang('translation.Companies')</a> @endslot
        @slot('title') @lang('translation.Companies_destroy') @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('company.create') }}">
                <button type="button" class="btn btn-info waves-effect btn-label waves-light mb-2 me-2">
                    <i class="bx bx-plus label-icon"></i> Añadir
                </button>
            </a>
            <a href="{{ route('company.index') }}">
                <button type="button" class="btn btn-success waves-effect btn-label waves-light mb-2 me-2">
                    <i class="bx bx-check-square label-icon"></i> Activos
                </button>
            </a>
            <a href="{{ route('company.deleted') }}">
                <button type="button" class="btn btn-danger waves-effect btn-label waves-light mb-2 mr-2">
                    <i class="bx bx-trash label-icon"></i> Eliminados
                </button>
            </a>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cif</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($index as $company)
                                <tr>
                                    <td>
                                        @if($company->getImageList($company->id))
                                            <img src="{{ $company->getImageList($company->id) }}" style="max-width: 25px">
                                        @else
                                            <img src="{{URL::asset('assets/images/favicon.ico')}}" style="max-width: 30px">
                                        @endif
                                    </td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->cif }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item">
                                                <span data-bs-toggle="modal" data-bs-target="#col-alma-{{ $company->id }}-act">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Activar">
                                                        <i class="bx bx-revision text-info"></i>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="modal fade" id="col-alma-{{ $company->id }}-act">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <form action="{{ route('company.active', ['company' => $company->id]) }}" method="POST" novalidate>
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h4 class="text-col-list">¿Está seguro de activar la empresa?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div><b>{{ $company->name }}</b> volverá a ser visible en Freefee.</div>
                                                    </div>
                                                    <div class="modal-footer align-left">
                                                        <input type="submit" class="btn btn-info" value="Activar">
                                                        <input type="button" data-bs-dismiss="modal" class="btn btn-light" value="Cancelar">
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex" style="float: right">
                            {!! $index->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
<!-- Modals -->

<!-- Fin Modals -->
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
