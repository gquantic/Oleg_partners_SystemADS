@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {{ \Session::get('success') }}
                    </div>
                @endif
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-header border-bottom bg-transparent">
                            <div class="d-flex align-items-center justify-content-between pt-2 pb-2">
                                <div>
                                    <h5 class="mb-0">Каталог офферов</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row product-grid">
                @foreach($offers as $offer)
                    <div class="col-3">
                        <a href="/offer/{{ $offer->id }}">
                            <div class="card">
                                <div style="background: url('/uploads/{{ $offer->image }}');background-size: cover;background-repeat: no-repeat;
                                    background-position: center center; height: 200px; width: 100%;"></div>
                                <div class="">
                                    {{--                                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>--}}
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $offer->title }}</h6>

                                    <table class="table table-sm mt-3">
                                        <tbody>
                                        <tr>
                                            <td>Тип оффера</td>
                                            <td>
                                                {{ $offer->action }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ставка</td>
                                            <td>

                                                {{ $offer->sale_percent }}%

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Продаж в день</td>
                                            <td>

                                                {{ $offer->daily_sales }}

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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
