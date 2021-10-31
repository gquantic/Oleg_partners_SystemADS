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
