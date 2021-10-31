@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="col-lg-12 alert alert-danger">
                    Пожалуйста, ознакомьтесь с
                    <a href="/rules/add-offer" style="color: inherit; border-bottom: 1px solid;" target="_blank">
                        правилами создания офферов
                    </a>
                    перед началом.
                </div>
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="row w-100">
                        <div class="col-lg-8 col-md-12">
                            <div class="card radius-10 w-100">
                                <div class="card-header border-bottom bg-transparent">
                                    <div class="d-flex align-items-center pt-2 pb-2">
                                        <div>
                                            <h6 class="mb-0">Информация об оффере</h6>
                                        </div>
                                        <div class="font-22 ms-auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Изображения оффера</label>
                                            <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Название оффера</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Укажите основной url проекта вашего оффера</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Тип проекта</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Тип 1</option>
                                                <option value="">Тип 2</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Детальное описание оффера</label>
                                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card radius-10 w-100">
                                <div class="card-header border-bottom bg-transparent">
                                    <div class="d-flex align-items-center pt-2 pb-2">
                                        <div>
                                            <h6 class="mb-0">Настройки оплаты</h6>
                                        </div>
                                        <div class="font-22 ms-auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Тип действий</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Sale</option>
                                                <option value="">Revshare</option>
                                                <option value="">CPA</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Укажите процент с продажи</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">%</span>
                                                </div>
                                                <input class="form-control" id="percent_rate" name="percent_rate" type="text" placeholder="0.00">
                                            </div>
                                        </div>

                                        <div class="row w-100">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="" class="mb-2">Мин. стоимость продукта</label>
                                                    <input type="text" class="form-control" placeholder="0.00">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="" class="mb-2">Макс. стоимость продукта</label>
                                                    <input type="text" class="form-control" placeholder="0.00">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">URL для получения трафика</label>
                                            <input type="text" class="form-control" placeholder="https://example.ru">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Укажите ссылку на ваш телеграмм или почту, для связи модератора.</label>
                                            <input type="text" class="form-control" placeholder="https://t.me/user">
                                        </div>
                                    </form>

                                    <div class="alert alert-warning">
                                        Заполните краткую информацию для прохождение модерации вашего оффера.
                                        <hr>
                                        Тип действия определяет ключевое значение для вебмастеров и клиентов. Так-же от него зависит система оплаты вознаграждения вебмастеров.
                                    </div>

                                    <div class="d-flex justify-content-end w-100">
                                        <button class="btn btn-primary mt-2">Создать оффер</button>
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

@section('post-upload')
    <style>
        .imageuploadify-container img {
            width: 150px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection
