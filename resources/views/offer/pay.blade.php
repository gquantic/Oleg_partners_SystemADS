@extends('layouts.lk')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <!--end row-->
            <link rel="stylesheet" href="{{ asset('/css/form-wizard.css') }}">
            <form method="post" action="/action/offer/pay" id="msform">
                @csrf
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center pb-4">
                    <h4 class="fs-title text-center text-success">Оффер был успешно создан</h4>
                    <h6>Для продолжения необходимо пополнить баланс оффера </h6>
                    <div class="row align-items-center justify-content-center align-content-center">
                        <div class="col-6 mt-4">
                            <div class="row">
                                <input type="number" class="form-control text-center" placeholder="Введите сумму" style="width: 400px;" name="amount">
                                <input type="text" value="{{ $id }}" name="offer_id" hidden>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="pay" class="action-button" value="Перейти к пополнению" style="background: rgb(69,183,15); border-radius: 15px;width: 230px;" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
