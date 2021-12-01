@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Просмотр оффера</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Просмотр оффера</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        @if($author)
                        <a href="/offer/my/{{ $data->id }}/edit" type="button" class="btn btn-primary">Настройки оффера</a>
                        @endif
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            @if (\Session::has('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {!! \Session::get('success') !!}
                        </div>
                    </div>
                </div>
            @endif

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4 border-end">
                        <img src="/uploads/{{ $data->image }}" class="img-fluid" alt="...">
                        <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
{{--                            <div class="col"><img src="assets/images/products/12.png" width="70" class="border rounded cursor-pointer" alt=""></div>--}}
{{--                            <div class="col"><img src="assets/images/products/11.png" width="70" class="border rounded cursor-pointer" alt=""></div>--}}
{{--                            <div class="col"><img src="assets/images/products/14.png" width="70" class="border rounded cursor-pointer" alt=""></div>--}}
{{--                            <div class="col"><img src="assets/images/products/15.png" width="70" class="border rounded cursor-pointer" alt=""></div>--}}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->title }}</h4>
                            <div class="d-flex pb-3">
                                <div class="text-danger"><i class="bx bxs-cart-alt align-middle"></i> Лимит продаж в день {{ $data->daily_sales }}</div>
                            </div>
                            <div class="mb-3">
                                <span class="price h4">${{ $data->sale_percent }}</span>
                                <span class="text-muted">/ {{ $data->action }}</span>
                            </div>
                            <p class="card-text fs-6">{{ $data->description }}</p>
                            <dl class="row mb-2">
                                <dt class="col-sm-3">Тип оффера</dt>
                                <dd class="col-sm-9">{{ $data->type }}</dd>

                                <dt class="col-sm-3">Конверсия</dt>
                                <dd class="col-sm-9">30%</dd>

                                <dt class="col-sm-3">Подтверждение</dt>
                                <dd class="col-sm-9">10%</dd>
                            </dl>

                            @if(!$author)
                            <div class="d-flex gap-3 mt-3">
                                @if (DB::table('connect_requests')->where('offer', $data->id)->where('user', Auth::user()->id)->first() === null)
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#connectModal">Подключиться к офферу</a>
                                @else
                                    <button class="btn btn-warning" disabled>Запрос отправлен</button>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="connectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Получение рекламной ссылки</h5>
{{--                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
                        </div>
                        <div class="modal-body">
                            <form action="/action/offer/connect" method="post">
                                @csrf
                                <input type="text" name="id" value="{{ $data->id }}" hidden>
                                <div class="form-group">
                                    <label for="" class="mb-1">Создайте рабочее название - аббревиатуру ссылки.</label>
                                    <input type="text" value="" name="urlName" class="form-control mb-3">
                                </div>
                                <div class="">
                                    <div style="width: fit-content;margin-right: 0px;float: right;">
                                        <button type="button" class="btn btn-light mr-3" data-dismiss="modal">Отменить</button>
                                        <button type="submit" class="btn btn-primary ml-3">Подключиться</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-comment-detail font-18 me-1"></i>
                            </div>
                            <div class="tab-title"> Описание </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-bookmark-alt font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Детали</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-star font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Промоматериалы</div>
                        </div>
                    </a>
                </li>
                @if($author)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#balance" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bx-dollar font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Финансы оффера</div>
                            </div>
                        </a>
                    </li>
                @endif
            </ul>
            <div class="mt-0">
                <div class="">
                    <div class="row">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-responsive table-borderless table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 500px;"></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <b>Тип проекта</b>
                                                </td>
                                                <td>
                                                    <span>{{ $data->type }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Тип действий</b>
                                                </td>
                                                <td>
                                                    <span>{{ $data->action }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Установленная ставка/вознограждение</b>
                                                </td>
                                                <td>
                                                    <span>{{ $data->sale_percent }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>URL</b>
                                                </td>
                                                <td>
                                                    <span>{{ $data->url }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Мин. пополнение</b>
                                                </td>
                                                <td>
                                                    <span>{{ $data->price_min }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="mb-0">{{ $data->action_description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        @if (count($creatives) > 0)
                                            <h5>Промоматериалы</h5>
                                            <table class="table table-responsive table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width: 5%;"></th>
                                                    <th style="width: 90%;"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($creatives as $creative)
                                                    <tr valign="middle">
                                                        <td>@if($creative->type == 'land') Лендинг @else Изображение @endif</td>
                                                        <td><a target="_blank" href="@if($creative->type == 'land'){{ $creative->url }}@else/uploads/creo/{{ $creative->img }}@endif">{{ $creative->title }}</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p class="mt-0">Промоматериалов пока нет.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($author)
                                <div class="tab-pane fade" id="balance" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-3">Баланс оффера</dt>
                                                <dd class="col-sm-9">0 <a href="/offer/pay/{{ $data->id }}" class="ml-2">Пополнить</a></dd>

                                                <dt class="col-sm-3">В холде</dt>
                                                <dd class="col-sm-9">0</dd>

                                                <dt class="col-sm-3">Всего выплачено</dt>
                                                <dd class="col-sm-9">0</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('post-upload')

@endsection
