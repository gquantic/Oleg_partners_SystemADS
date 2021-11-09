@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 bg-gradient-deepblue">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">0</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-cart fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Привлечено лидов</p>
                                <p class="mb-0 ms-auto">0%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-orange">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">0</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-dollar fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Всего заработано</p>
                                <p class="mb-0 ms-auto">0%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">0</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-group fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Посещений страниц</p>
                                <p class="mb-0 ms-auto">0%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ibiza">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">0</h5>
                                <div class="ms-auto">
                                    <i class="bx bx-dollar fs-3 text-white"></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Расходов по офферам</p>
                                <p class="mb-0 ms-auto">0%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
            <div class="row">
                <div class="col-6 col-lg-6 col-xl-6 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-header border-bottom bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">История входов</h6>
                                    </div>
                                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($authorizationList as $authorize)
                                    <li class="list-group-item bg-transparent">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-0">
                                                <h6 class="mb-0">{{ substr($authorize->device, 0, 36) }} <small class="ms-4">{{ str_replace('-', '.', $authorize->created_at); }}</small></h6>
                                                <p class="mb-0 font-13 text-secondary">{{ $authorize->ip }}</p>
                                            </div>
                                            <hr>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-6 col-md-12 d-flex h-100">
                    <div class="card radius-10 w-100">
                        <div class="card-header border-bottom bg-transparent">
                            <div class="d-flex align-items-center pt-2 pb-2">
                                <div>
                                    <h6 class="mb-0">Заказать вывод средств</h6>
                                </div>
                                <div class="font-22 ms-auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Доступная сумма к выводу составляет {{ Auth::user()->balance }}$</p>

                            <form action="">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Сумма вывода</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                                        </div>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Вывести на</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Сбербанк</option>
                                        <option value="">Qiwi</option>
                                        <option value="">Webmoney</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Реквизиты счета</label>
                                    <input type="text" name="amount" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Пароль для подтверждения операции</label>
                                    <input type="text" name="amount" class="form-control">
                                </div>

                                <p class="mb-2 mt-4">Нажав кнопку "Вывести" вы соглашаетесь с правилами и регламентом вывода средств.</p>

                                <button class="btn btn-primary">
                                    Вывести
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
