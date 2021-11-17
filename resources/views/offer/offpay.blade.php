@extends('layouts.lk')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
                    <link rel="stylesheet" href="{{ asset('/css/form-wizard.css') }}">
                    <form method="post" action="{{ route('create-offer') }}" enctype="multipart/form-data" id="msform">
                        @csrf
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="container  py-2">
                                <div class="d-flex align-items-center justify-content-center ">
                                        <div class="card-body text-center ">
                                            <a class="fs-title text-center text-success">Оффер был успешно создан</a>
                                            <h5>Для продолжения необходимо пополнить баланс оффера </h5>
                                            <div class="row align-items-center justify-content-center align-content-center">
                                                <div class="col-6 mt-5">
                                                    <div class="row">
                                                        <input type="text" class="form-control" placeholder="Введите сумму">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Далее" style="background: rgb(69,183,15); border-radius: 15px;" />
                        </fieldset>

                            <fieldset>
                                <div class="container  py-2">
                                    <div class="d-flex align-items-center justify-content-center ">
                                        <div class="card-body text-center ">
                                            <a class="fs-title text-center text-success">Баланс пополнен!</a>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" style="border-radius: 15px;" value="Назад" />
                                <input type="button" name="next" class="next action-button btn-lg" value="Продолжить заполнение" style="background: rgb(69,183,15); border-radius: 15px;" />
                            </fieldset>
                     </form>
                    <script src="{{ asset('/js/form-wizard.js') }}"></script>

        </div>
    </div>

@endsection
