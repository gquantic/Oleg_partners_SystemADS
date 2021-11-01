@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="main-body">
                    <div class="row">
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header text-center">--}}
{{--                                    <strong>Изменение персональных данных</strong>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-sm-3">--}}
{{--                                            <h6 class="mb-0">Полное имя</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-9 text-secondary">--}}
{{--                                            <input type="text" class="form-control" value="" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-sm-3">--}}
{{--                                            <h6 class="mb-0">Email</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-9 text-secondary">--}}
{{--                                            <input type="text" class="form-control" value="" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-sm-3">--}}
{{--                                            <h6 class="mb-0">Номер телефона</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-9 text-secondary">--}}
{{--                                            <input type="text" class="form-control" value="" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-sm-3">--}}
{{--                                            <h6 class="mb-0">Mobile</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-9 text-secondary">--}}
{{--                                            <input type="text" class="form-control" value="" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-sm-3">--}}
{{--                                            <h6 class="mb-0">Address</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-9 text-secondary">--}}
{{--                                            <input type="text" class="form-control" value="" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <button type="submit" class="btn btn-primary ">--}}
{{--                                            Сохранить--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://e7.pngegg.com/pngimages/165/652/png-clipart-businessperson-computer-icons-avatar-avatar-heroes-public-relations.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                        <div class="mt-3">
                                            <h4>John Doe</h4>
                                            <h6 class="text-secondary mb-1 ">Admin</h6>
                                            {{--                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>--}}
                                            <button class="btn btn-primary">Изменить аватар</button>
                                            {{--                                            <button class="btn btn-outline-primary">Message</button>--}}
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                            <span class="text-secondary">https://codervent.com</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                            <span class="text-secondary">codervent</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-lg-12">
                                        <div class="card">

                                            @if( session()->has('message') )
                                                <div class="alert alert-success alert-dismissible">
                                                    {{ session()->get('message') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                            @endif


                                            @if( session()->has('error') )
                                                <div class="alert alert-danger alert-dismissible">
                                                    {{ session()->get('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                                </div>
                                                @endif


                                                @if( $errors->any() )
                                                    <div class="alert alert-danger">
                                                        <ul class="edit-profile">
                                                            @foreach($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif


                                            <div class="card-header text-center">
                                                <strong>Смена пароля</strong>
                                            </div>
                                            <form class="card-body form-group" method="POST" action="{{ route('password', Auth::user() ) }}">
                                                @csrf
                                                @method("PUT")
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <label for="old-password"><h6 class="mb-0">Старый пароль</h6></label>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="password" name="old-password" class="form-control" id="old-password" />
                                                    </div>
                                                </div>



                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Новый пароль</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="password" name="password" class="form-control" id="password" />
                                                    </div>
                                                </div>



                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Подтвердите пароль</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" />
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn btn-primary ">
                                                        Сохранить
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <strong>Смена Email</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" value="" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email повторно</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" value="" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Пароль</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn btn-primary ">
                                                        Сохранить
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
