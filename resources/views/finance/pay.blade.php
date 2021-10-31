@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-6 col-xl-6 col-md-12 d-flex">
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
                                    <label for="" class="mb-2">Сумма пополнения</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                                        </div>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Способ пополнения</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Сбербанк</option>
                                        <option value="">Qiwi</option>
                                        <option value="">Webmoney</option>
                                    </select>
                                </div>

                                <p class="mb-2 mt-4">Нажав кнопку "Пополнить" вы соглашаетесь с правилами и регламентом
                                    пополнения средств и подтверждаете согласие оплаты комиссии сервиса на пополнение средств.</p>

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
