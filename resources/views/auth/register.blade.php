@extends('layouts.wrapper')

@section('content')
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Регистрация</h3>
                                        <p>Уже есть аккаунт? <a href="/login">Войдите</a>
                                        </p>
                                    </div>
                                    {{--                                    <div class="d-grid">--}}
                                    {{--                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">--}}
                                    {{--                                          <img class="me-2" src="{{ asset('/images/icons/search.svg') }}" width="16" alt="Image Description">--}}
                                    {{--                                          <span>Sign in with Google</span>--}}
                                    {{--											</span>--}}
                                    {{--                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>--}}
                                    {{--                                        <hr/>--}}
                                    {{--                                    </div>--}}
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name" class="col-md-12 col-form-label">Имя</label>

                                                <div class="col-md-12">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email"
                                                       class="col-md-12 col-form-label">Почта</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                                           value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password"
                                                       class="col-md-12 col-form-label">Пароль</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                                           required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password-confirm"
                                                       class="col-md-12 col-form-label">Повторите пароль</label>

                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="checkbox" name="sendNews" value="1" id="sendMeNews">
                                                <label for="sendMeNews">Я согласен на Email рассылку сервиса</label>
                                            </div>

                                            <div class="form-group row mb-0 mt-4">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Регистрация
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
