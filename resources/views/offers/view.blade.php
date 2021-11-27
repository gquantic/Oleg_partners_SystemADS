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
                                <span class="price h4">{{ $data->sale_percent }}</span>
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
                                <a href="#" class="btn btn-primary">Подключиться к офферу</a>
                            </div>
                            @endif
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
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <p>{{ $data->description }}</p>
                            </div>
                            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                <p>{{ $data->action_description }}</p>
                            </div>
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <p>Промоматериалов пока нет.</p>
                            </div>
                            @if($author)
                                <div class="tab-pane fade" id="balance" role="tabpanel">
                                    <dl class="row">
                                        <dt class="col-sm-3">Баланс оффера</dt>
                                        <dd class="col-sm-9">0 <a href="/offer/pay/{{ $data->id }}" class="ml-2">Пополнить</a></dd>

                                        <dt class="col-sm-3">В холде</dt>
                                        <dd class="col-sm-9">0</dd>

                                        <dt class="col-sm-3">Всего выплачено</dt>
                                        <dd class="col-sm-9">0</dd>
                                    </dl>
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
