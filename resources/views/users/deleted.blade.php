@extends('layouts.master')

@section('title') @lang('translation.Users_destroy') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') <a href="{{ route('user.index') }}">@lang('translation.Users')</a> @endslot
        @slot('title') @lang('translation.Users_destroy') @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('user.create') }}">
                <button type="button" class="btn btn-info waves-effect btn-label waves-light mb-2 me-2">
                    <i class="bx bx-plus label-icon"></i> Añadir
                </button>
            </a>
            <a href="{{ route('user.index') }}">
                <button type="button" class="btn btn-success waves-effect btn-label waves-light mb-2 me-2">
                    <i class="bx bx-user-check label-icon"></i> Activos
                </button>
            </a>
            <a href="{{ route('user.deleted') }}">
                <button type="button" class="btn btn-danger waves-effect btn-label waves-light mb-2 mr-2">
                    <i class="bx bx-trash label-icon"></i> Eliminados
                </button>
            </a>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    @if($role == 1) <th scope="col">Empresa</th> @endif
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($index as $user)
                                <tr>
                                    <td>
                                        @if($user->getImageList($user->id))
                                        <img src="{{URL::asset($user->getImageList($user->id))}}" style="max-height: 25px">
                                        @elseif($role == 1)
                                        <img src="{{URL::asset('assets/images/freefee.png')}}" style="max-height: 25px">
                                        @else
                                        <img src="{{URL::asset('assets/images/fav.ico')}}" style="max-height: 20px">
                                        @endif
                                    </td>
                                    @if($role == 1) <td>{{ $user->getUserCompany($user->id_company) }}</td> @endif
                                    <td>{{ $user->name }} {{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->tel }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getUserRoleName($user->id) }}</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Activar Usuario">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#col-alma-{{ $user->id }}-act"><i class="bx bx-revision text-info"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="modal fade" id="col-alma-{{ $user->id }}-act">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <form action="{{ route('user.active', ['user' => $user->id]) }}" method="POST" novalidate>
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-header">
                                                        <h4 class="text-col-list">¿Está seguro de activar el usuario?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div><b>{{ $user->name }} {{ $user->first_name }} {{ $user->last_name }}</b> volverá a tener acceso a freefee.</div>
                                                    </div>
                                                    <div class="modal-footer align-left">
                                                        <input type="submit" class="btn btn-info" value="Activar">
                                                        <input type="button" data-bs-dismiss="modal" class="btn btn-light" value="Cancelar">
                                                    </div>
                                                    <input id="cliente_texto" name="buscar_texto" type="hidden" value="Nombre del usuario - ">
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
