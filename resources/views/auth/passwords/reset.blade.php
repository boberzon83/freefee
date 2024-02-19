@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Recover_Password')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary"> Reiniciar Contraseña</h5>
                                            <p>Confirmar reinicio de contraseña en freefee.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-start mt-3 p-4">
                                        <img src="{{ URL::asset('/assets/images/logo-dark-foot.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="useremail" name="email" placeholder="Enter email"
                                                value="{{ $email ?? old('email') }}" id="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                id="userpassword" placeholder="Enter password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Confirm Password</label>
                                            <input id="password-confirm" type="password" name="password_confirmation"
                                                class="form-control" placeholder="Enter confirm password">
                                        </div>

                                        <div class="text-end mb-4">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Reiniciar</button>
                                        </div>
                                        <div class="mb-1">
                                            ¿Has recordado la contraseña? <a href="{{ url('login') }}" class="fw-medium text-primary"> Inicia sesión</a>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center text-light">
                            <p>¿Has recordado la contraseña? <a href="{{ url('login') }}" class="fw-medium text-primary"> Inicia sesión</a>
                            </p>
                            <p>© <script>
                                document.write(new Date().getFullYear())

                            </script> freefee
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
