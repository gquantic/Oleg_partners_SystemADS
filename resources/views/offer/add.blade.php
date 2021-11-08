@extends('layouts.lk')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="col-12">
                    <link rel="stylesheet" href="{{ asset('/css/form-wizard.css') }}">
                    <form method="post" action="{{ route('create-offer') }}" enctype="multipart/form-data" id="msform">
                        @csrf
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Правила создания оффера</strong></li>
                            <li id="personal"><strong>Изображение оффера</strong></li>
                            <li id="payment"><strong>Описание оффера</strong></li>
                            <li id="confirm"><strong>Тип действий</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                                <div class="container">
                                    <div class="col-lg-12 alert alert-primary">
                                        Пожалуйста, ознакомьтесь с
                                        <a href="/rules/add-offer" style="color: inherit; border-bottom: 1px solid;" target="_blank">
                                            <b>правилами создания офферов</b>
                                        </a>
                                        перед началом.
                                    </div>
                                    <div class="form-card">
                                        <h2 class="fs-title">Правила создания оффера</h2>
                                        <p>1. Если вы желаете продвигать или продавать несколько товаров одной категории, то можно создать единый оффер. Пример: Косметика для женщин (духи, туш для ресниц, пудра)</p>
                                        <p>2. Если вы желаете продвигать или продавать несколько товаров разной категории, для более успешного продвижения вам потребуется создать несколько офферов. Пример: Он-лайн магазин, все для мужчин и Женщин (мужские духи, женские духи) Так как в данном случае Веб мастерам потребуется вести к вам две категории мотивированных клиентов.</p>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Далее" style="background: #0d6efd;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
                                <div class="col-lg-12 alert alert-primary">
                                    <b>Изображение оффера</b> дает уникальность и узнаваемость в общей таблице
                                </div>
                                <div class="form-card">
                                    <h2 class="fs-title">Изображение оффера</h2>
                                    <input type="file" name="image" placeholder="First Name" class="dropify" accept="image/*" />
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Назад" />
                            <input type="button" name="next" class="next action-button" value="Далее" style="background: #0d6efd;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
                                <div class="col-lg-12 alert alert-primary">
                                    <b>Название оффера</b> должно состоять или 2-3 слов кратко описвающих ваш продукт или компанию.
                                    <br>
                                    <b>URL проекта вашего оффера</b> - должен содержать корневой адрес сайта вашего проекта. Пример: example.com
                                    <br>
                                    <b>Тип проекта</b> - выберите под какую сферу деятельности подпадает ваш проект
                                    <br>
                                    <b>В описание оффера</b> кратко опишите суть вашего проекта и продукт который вы желаете продвигать
                                </div>
                                <div class="form-card">
                                    <h2 class="fs-title">Описание оффера</h2>
                                    <div class="form-group">
                                        <label for="name">Название оффера</label>
                                        <input class="form-control" name="name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Укажите основной url проекта вашего оффера</label>
                                        <input class="form-control" name="url" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="project_type">Тип проекта</label>
                                        <select class="form-control" name="project_type" id="project_type">
                                            <option value="1">Рестораны с он-лайн заказом</option>
                                            <option value="2">Аксессуары и Гаджеты</option>
                                            <option value="3">Инвестиционные проекты – компании</option>
                                            <option value="4">Акции и акционерные компании</option>
                                            <option value="5">Форекс и Трейдинг</option>
                                            <option value="6">Финансовые игры - HYIPs</option>
                                            <option value="7">МЛМ и Сетевой маркетинг</option>
                                            <option value="8">Казино и Лотереи – Gambling</option>
                                            <option value="9">Букмейкеры и Ставки на спорт</option>
                                            <option value="10">Препараты и фармакология - Nutra</option>
                                            <option value="11">Обучение, курсы и тренинги</option>
                                            <option value="12">Онлайн магазины, Продажа товаров - Marketplace </option>
                                            <option value="13">Кошельки, Платежные шлюзы, Обменники</option>
                                            <option value="14">Банки и Кредитные организации</option>
                                            <option value="15">Игры, IT и приложения</option>
                                            <option value="16">Кэш-Бек сервисы</option>
                                            <option value="17">Гаджеты</option>
                                            <option value="18">Dating</option>
                                            <option value="19">Туризм и Путешествия</option>
                                            <option value="20">Иное - Другая категория </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Детальное описание оффера</label>
                                        <small>(Детальное описание действия по офферу)</small>
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Назад" />
                            <input type="button" name="next" class="next action-button" value="Далее" style="background: #0d6efd;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
                                <div class="col-lg-12 alert alert-primary">
                                    <b>Тип действия</b> определяет ключевое значение для вебмастеров и клиентов. Так-же от него зависит система оплаты вознаграждения вебмастеров.
                                    <br>
                                    <b>URL для получения трафика</b> - если вы хотите получать трафик на рефф ссылку или на специальный под домен что бы отслеживать трафик или продажи, укажите дополнительную ссылку. Если вы хотите получать трафик на основной домен, то не требуется заполнять данное поле
                                </div>
                                <div class="form-card">
                                    <h2 class="fs-title">Настройки вознаграждения</h2>
                                    <div class="row">
                                        <div class="col-lg-7 m-auto ">
                                            <div class="form-group mb-2">
                                                <label>Тип действий</label>
                                                <select class="form-control" name="type_do">
                                                    <option value="1">Sale</option>
                                                    <option value="2">Revshare</option>
                                                    <option value="3">CPA</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12 actions">
                                                    <div class="form-group">
                                                        <label>Описание действия</label>
                                                        <textarea class="form-control" name="description_do"></textarea>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label>Валюта товара</label>
                                                        <select class="form-control" name="currency">
                                                            <option value="USD">USD</option>
                                                            <option value="GBR">GBR</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="RUB">RUB</option>
                                                            <option value="UAH">UAH</option>
                                                            <option value="KZT">KZT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12 sellings">
                                                    <div class="form-group">
                                                        <label>Укажите процент с продажи</label>
                                                        <input class="form-control" type="text" name="percentsale" placeholder="0.00">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-6 ">
                                                            <div class="form-group">
                                                                <label>Мин. стоимость продукта</label>
                                                                <input class="form-control" type="text" name="minprice" placeholder="0.00">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6 ">
                                                            <div class="form-group">
                                                                <label>Макс. стоимость продукта</label>
                                                                <input class="form-control" type="text" name="maxprice" placeholder="0.00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Максимальное количество продаж в день</label>
                                                        <input type="text" name="numberofsales">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-group">
                                                        <label><label for="traffic_url">URL для получения трафика</label></label>
                                                        <input type="text" name="urltraffic" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Укажите ссылку на ваш телеграмм или почту, для связи модератора.</label>
                                                        <input type="text" name="urltelegram" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Назад" />
                                <input type="submit" name="make_payment" class="action-button px-0" value="Отправить" style="background: #0d6efd;" />
                        </fieldset>
                    </form>
                    <script src="{{ asset('/js/form-wizard.js') }}"></script>

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
