@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="container-fluid">




                    <style>
                        .offercard table>tbody>tr>td{
                            font-size: 13px;
                        }
                        .offercard table td:last-of-type{
                            text-align:right
                        }
                        .offercard table td{
                            border:0px;
                            border-bottom:1px dotted grey;
                            padding:0em 0.2em;
                        }
                    </style>
                    <div class="row">

                        <div class="col-xs-12 col-md-12">
                            <div class="accordion" id="filtersAccordion">
                                <div class="card">
                                    <div class="card-header" id="filters">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#filtersbox" aria-expanded="true" aria-controls="filtersbox">
                                            Фильтры
                                        </a>
                                    </div>
                                    <div class="collapse" id="filtersbox" aria-labelledby="filters" data-parent="#filtersAccordion">
                                        <div class="card-body">
                                            <form>
                                                <div class="row pb-3">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Тип проекта</label>
                                                            <select class="form-control" name="category">
                                                                <option value="0">Любой</option>


                                                                <option value="19">Рестораны с он-лайн заказом</option>

                                                                <option value="6">Аксессуары и Гаджеты</option>

                                                                <option value="7">Инвестиционные проекты – компании</option>

                                                                <option value="8">Акции и акционерные компании</option>

                                                                <option value="9">Форекс и Трейдинг</option>

                                                                <option value="10">Финансовые игры - HYIPs</option>

                                                                <option value="11">МЛМ и Сетевой маркетинг</option>

                                                                <option value="12">Казино и Лотереи – Gambling</option>

                                                                <option value="13">Букмейкеры и Ставки на спорт</option>

                                                                <option value="14">Препараты и фармакология - Nutra</option>

                                                                <option value="15">Обучение, курсы и тренинги</option>

                                                                <option value="16">Онлайн магазины, Продажа товаров - Marketplace </option>

                                                                <option value="17">Кошельки, Платежные шлюзы, Обменники</option>

                                                                <option value="18">Банки и Кредитные организации</option>

                                                                <option value="20">Игры, IT и приложения</option>

                                                                <option value="21">Кэш-Бек сервисы</option>

                                                                <option value="22">Гаджеты</option>

                                                                <option value="23">Dating</option>

                                                                <option value="24">Туризм и Путешествия</option>

                                                                <option value="26">Иное - Другая категория </option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Тип оффера</label>
                                                            <select class="form-control" name="action">
                                                                <option value="0">Любой</option>


                                                                <option value="1">Sale</option>

                                                                <option value="2">Revshare</option>

                                                                <option value="3">CPA</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-outline-primary btn-sm"> Применить</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12 col-md-12">
                            <div class="row" style="display: flex;flex-direction: row;flex-wrap: wrap;">


                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>First</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Sale
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/1" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Second</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Sale
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/2" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Third</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Sale
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/3" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Fourth</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Revshare
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/4" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Fiveth</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        CPA
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        12.00$

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/5" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Sixth</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00$

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/6" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Seventh</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Sale
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        30.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/7" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Eigth</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        Revshare
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        10.00%

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/8" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-4 mb-3">
                                    <div class="card offercard" style="height:100%;">
                                        <div class="card-body">
                                            <center>
                                                <img style="max-width:100%;height:120px;object-fit:cover;" class="mb-3" src="{{ asset('/images/1111.jpg') }}">
                                            </center>
                                            <h3>Nineth</h3>
                                            <table class="table table-sm">
                                                <tbody><tr>
                                                    <td>Тип оффера</td>
                                                    <td>
                                                        CPA
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ставка</td>
                                                    <td>

                                                        1.00$

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Потверждение</td>
                                                    <td>
                                                        Мгновенно
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Конверсия</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подтверждение</td>
                                                    <td>
                                                        ---
                                                    </td>
                                                </tr>
                                                </tbody></table>




                                            <center><a href="/offer/9" class="btn btn-primary mt-2">Подробнее</a></center>
                                        </div>
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
