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
                            <li id="personal"><strong> Изображение оффера</strong></li>
                            <li id="payment"><strong>Описание оффера</strong></li>
                            <li id="confirm"><strong>Тип действий</strong></li>
                        </ul>
                        <!-- fieldsets -->
{{--                        <fieldset>--}}
{{--                            <div class="container">--}}
{{--                                <div class="form-card row row-cols-auto">--}}
{{--                                    <h2 class="fs-title">ВНИМАНИЕ!</h2>--}}
{{--                                    <div class="col-12 mb-2">--}}
{{--                                        <h6>Обращаем ваше внимание.</h6>--}}
{{--                                    </div>--}}

{{--                                    <p>Если ваш проект создан на конструкторе, или вам нужен трафик или продажи которые вы закрываете или генерируете в социальных сетях или подобных порталах. То есть, если у вас, или у ваших технических специалистов нету прямого доступа к хостингу, и вы не можете подключить наш API код, то вы можете заказать трафик только типов СРС или СРМ. То есть переходы или баннерная реклама - просмотры.</p>--}}
{{--                                    <p>Если у вас есть прямой доступ или у ваших технических специалистов к хостингу и скрипу, и вы можете подключить наш API код к вашему проекту, то в этом случае вы можете заказать любой из предоставляемых нами типов трафика и партнерских программ продаж.--}}
{{--                                        СРС СРМ СРА RefSare Sale Lead--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-column align-items-center justify-content-center">--}}
{{--                                <a href="" style="border-bottom: 1px solid;margin-bottom: 10px;">Узнать подробнее о типах трафика</a>--}}
{{--                                <input type="button" name="next" class="next action-button" value="Мне всё понятно, далее" style="background: #0d6efd; border-radius: 15px;width:250px;" />--}}
{{--                            </div>--}}
{{--                        </fieldset>--}}
                        <fieldset>
                                <div class="container">
{{--                                    <div class="col-lg-12 alert alert-primary">--}}
{{--                                        Пожалуйста, ознакомьтесь с--}}
{{--                                        <a href="/rules/add-offer" style="color: inherit; border-bottom: 1px solid;" target="_blank">--}}
{{--                                            <b>правилами создания офферов</b>--}}
{{--                                        </a>--}}
{{--                                        перед началом.--}}
{{--                                    </div>--}}
                                    <div class="form-card row row-cols-auto">
                                        <h2 class="fs-title">ВНИМАНИЕ!</h2>
                                        <div class="col-12 mb-2">
                                            <h6>Обращаем ваше внимание.</h6>
                                        </div>

                                        <p>Если ваш проект создан на конструкторе, или вам нужен трафик или продажи которые вы закрываете или генерируете в социальных сетях или подобных порталах. То есть, если у вас, или у ваших технических специалистов нету прямого доступа к хостингу, и вы не можете подключить наш API код, то вы можете заказать трафик только типов СРС или СРМ. То есть переходы или баннерная реклама - просмотры.</p>
                                        <p>Если у вас есть прямой доступ или у ваших технических специалистов к хостингу и скрипу, и вы можете подключить наш API код к вашему проекту, то в этом случае вы можете заказать любой из предоставляемых нами типов трафика и партнерских программ продаж.
                                            СРС СРМ СРА RefSare Sale Lead
                                        </p>

                                    </div>

                                    <div class="form-card row row-cols-auto">
                                        <h2 class="fs-title">Правила создания оффера</h2>

                                        <p>1. Если вы желаете продвигать или продавать несколько товаров одной категории, то можно создать единый оффер. Пример: Косметика для женщин (духи, туш для ресниц, пудра)</p>
                                        <p>2. Если вы желаете продвигать или продавать несколько товаров разной категории, для более успешного продвижения вам потребуется создать несколько офферов. Пример: Он-лайн магазин, все для мужчин и Женщин (мужские духи, женские духи) Так как в данном случае Веб мастерам потребуется вести к вам две категории мотивированных клиентов.</p>

                                    </div>
                                </div>
                                <a href="" style="border-bottom: 1px solid;margin-right: 15px;">Узнать подробнее о типах трафика</a>
                                <input type="button" name="next" class="next action-button" value="Мне всё понятно, далее" style="background: #0d6efd; border-radius: 15px;width:250px;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
{{--                                <div class="col-lg-12 alert alert-primary">--}}
{{--                                    <b>Изображение оффера</b> дает уникальность и узнаваемость в общей таблице--}}
{{--                                </div>--}}
                                <div class="form-card row row-cols-auto">
                                    <h2 class="fs-title">Изображение оффера</h2>
                                    <i type="button" class="btn btn-link " data-bs-toggle="popover"  data-bs-content="Изображение оффера дает уникальность и узнаваемость в общей таблице"> <i class="fadeIn animated bx bx-help-circle"></i></i>
                                    <input type="file" name="image" placeholder="First Name" class="dropify" accept="image/*" />
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" style="border-radius: 15px;" value="Назад" />
                            <input type="button" name="next" class="next action-button" value="Далее" style="background: #0d6efd; border-radius: 15px;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
{{--                                <div class="col-lg-12 alert alert-primary">--}}
{{--                                    <b>Название оффера</b> должно состоять или 2-3 слов кратко описвающих ваш продукт или компанию.--}}
{{--                                    <br>--}}
{{--                                    <b>URL проекта вашего оффера</b> - должен содержать корневой адрес сайта вашего проекта. Пример: example.com--}}
{{--                                    <br>--}}
{{--                                    <b>Тип проекта</b> - выберите под какую сферу деятельности подпадает ваш проект--}}
{{--                                    <br>--}}
{{--                                    <b>В описание оффера</b> кратко опишите суть вашего проекта и продукт который вы желаете продвигать--}}
{{--                                </div>--}}
                                <div class="form-card row-cols-auto">
                                    <h2 class="fs-title">Описание оффера</h2>
                                    <div class="form-group">
                                        <div class="oa">
                                            <label for="name">Название оффера</label>
                                            <i type="button" class="btn btn-link" data-bs-toggle="popover"  data-bs-content="Название оффера должно состоять или 2-3 слов кратко описвающих ваш продукт или компанию"> <i class="fadeIn animated bx bx-help-circle"></i></i>
                                        </div>
                                        <input class="form-control" name="name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <div class="oa">
                                            <label>Укажите основной url проекта вашего оффера</label>
                                            <i type="button" class="btn btn-link" data-bs-toggle="popover"  data-bs-content="URL проекта вашего оффера - должен содержать корневой адрес сайта вашего проекта. Пример: example.com"> <i class="fadeIn animated bx bx-help-circle"></i></i>
                                        </div>
                                        <input class="form-control" name="url" type="text">

                                    </div>
                                    <div class="form-group">
                                        <div class="oa">
                                            <label for="project_type">Тип проекта</label>
                                            <i type="button" class="btn btn-link" data-bs-toggle="popover"  data-bs-content="Тип проекта - выберите под какую сферу деятельности попадает ваш проект"> <i class="fadeIn animated bx bx-help-circle"></i></i>
                                        </div>
                                        <select class="form-control" name="project_type" id="project_type">
                                            <option value="Рестораны с он-лайн заказом">Рестораны с он-лайн заказом</option>
                                            <option value="Аксессуары и Гаджеты">Аксессуары и Гаджеты</option>
                                            <option value="Инвестиционные проекты – компании">Инвестиционные проекты – компании</option>
                                            <option value="Акции и акционерные компании">Акции и акционерные компании</option>
                                            <option value="Форекс и Трейдинг">Форекс и Трейдинг</option>
                                            <option value="Финансовые игры - HYIPs">Финансовые игры - HYIPs</option>
                                            <option value="МЛМ и Сетевой маркетинг">МЛМ и Сетевой маркетинг</option>
                                            <option value="Казино и Лотереи – Gambling">Казино и Лотереи – Gambling</option>
                                            <option value="Букмейкеры и Ставки на спорт">Букмейкеры и Ставки на спорт</option>
                                            <option value="Препараты и фармакология - Nutra">Препараты и фармакология - Nutra</option>
                                            <option value="Обучение, курсы и тренинги">Обучение, курсы и тренинги</option>
                                            <option value="Онлайн магазины, Продажа товаров - Marketplace ">Онлайн магазины, Продажа товаров - Marketplace </option>
                                            <option value="Кошельки, Платежные шлюзы, Обменники">Кошельки, Платежные шлюзы, Обменники</option>
                                            <option value="Банки и Кредитные организации">Банки и Кредитные организации</option>
                                            <option value="Игры, IT и приложения">Игры, IT и приложения</option>
                                            <option value="Кэш-Бек сервисы">Кэш-Бек сервисы</option>
                                            <option value="Гаджеты">Гаджеты</option>
                                            <option value="Dating">Dating</option>
                                            <option value="Туризм и Путешествия">Туризм и Путешествия</option>
                                            <option value="Иное - Другая категория">Иное - Другая категория</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="oa">
                                            <label>Детальное описание оффера</label>
                                            <small>(Детальное описание действия по офферу)</small>
                                            <i type="button" class="btn btn-link" data-bs-toggle="popover"  data-bs-content="В описание оффера кратко опишите суть вашего проекта и продукт который вы желаете продвигать"><i class="fadeIn animated bx bx-help-circle"></i></i>
                                        </div>
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" style="border-radius: 15px;" value="Назад" />
                            <input type="button" name="next" class="next action-button" value="Далее" style="background: #0d6efd; border-radius: 15px;" />
                        </fieldset>
                        <fieldset>
                            <div class="container">
{{--                                <div class="col-lg-12 alert alert-primary">--}}
{{--                                    <b>Тип действия</b> определяет ключевое значение для вебмастеров и клиентов. Так-же от него зависит система оплаты вознаграждения вебмастеров.--}}
{{--                                    <br>--}}
{{--                                    <b>URL для получения трафика</b> - если вы хотите получать трафик на рефф ссылку или на специальный под домен что бы отслеживать трафик или продажи, укажите дополнительную ссылку. Если вы хотите получать трафик на основной домен, то не требуется заполнять данное поле--}}
{{--                                </div>--}}
                                <div class="form-card row row-cols-auto">
                                    <h2 class="fs-title">Настройки вознаграждения</h2>
                                    <div class="row">
                                        <div class="col-lg-7 m-auto ">
                                            <div class="form-group mb-2">
                                               <div class="oa">
                                                   <label>Тип действий</label>
                                                   <i type="button" class="btn btn-link " data-bs-toggle="popover"  data-bs-content="Тип действия определяет ключевое значение для вебмастеров и клиентов. Так-же от него зависит система оплаты вознаграждения вебмастеров."><i class="fadeIn animated bx bx-help-circle"></i></i>
                                               </div>
                                                <select class="form-control" name="type_do">
                                                    <option value="Sale">Sale</option>
                                                    <option value="Revshare">Revshare</option>
                                                    <option value="CPA">CPA</option>
                                                    <option value="CPC">CPC</option>
                                                    <option value="CPM">CPM</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12 actions oo">
                                                    <div class="form-group">
                                                        <label class="oa">Описание действия</label>
                                                        <textarea class="form-control" name="description_do"></textarea>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="oa">Валюта товара</label>
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
                                                <div class="col-xs-12 col-md-12 sellings oo">
                                                    <div class="form-group">
                                                        <label class="oa">Укажите процент с продажи</label>
                                                        <input class="form-control" type="text" name="percentsale" placeholder="0.00">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-6 ">
                                                            <div class="form-group">
                                                                <label class="oa">Мин. стоимость продукта</label>
                                                                <input class="form-control" type="text" name="minprice" placeholder="0.00">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6 ">
                                                            <div class="form-group">
                                                                <label class="oa">Макс. стоимость продукта</label>
                                                                <input class="form-control" type="text" name="maxprice" placeholder="0.00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="oa">Максимальное количество продаж в день</label>
                                                        <input type="text" name="numberofsales">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-group">
                                                        <div class="oa">
                                                            <label for="traffic_url">URL для получения трафика</label>
                                                            <i type="button" class="btn btn-link" data-bs-toggle="popover"  data-bs-content="URL для получения трафика - если вы хотите получать трафик на рефф ссылку или на специальный под домен что бы отслеживать трафик или продажи, укажите дополнительную ссылку. Если вы хотите получать трафик на основной домен, то не требуется заполнять данное поле"><i class="fadeIn animated bx bx-help-circle"></i></i>
                                                        </div>
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
                                <input type="button" name="previous" class="previous action-button-previous" style="border-radius: 15px;" value="Назад" />
                                <input type="submit" name="make_payment" class="action-button px-0" value="Отправить" style="background: #0d6efd; border-radius: 15px;" />
                        </fieldset>
                    </form>
                    <script src="{{ asset('/js/form-wizard.js') }}"></script>

                </div>
            </div>
        </div>
    </div>
    <script>

        $(function () {
            $('[data-bs-toggle="popover"]').popover();
        })
    </script>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.dropify').dropify();
    </script>
@endsection
