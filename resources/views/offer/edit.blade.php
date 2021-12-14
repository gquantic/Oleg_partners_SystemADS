@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Просмотр оффера</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Просмотр оффера</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            @if ($errors->any())
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {!! \Session::get('success') !!}
                        </div>
                    </div>
                </div>
            @endif

            @if($obj->checkDetails($data->id) == false)
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            Заполните данные для отправки на модерацию.
                        </div>
                    </div>
                </div>
            @elseif($data->checked == 0 && $moderate == "wait")
                <div class="row mb-2">
                    <div class="col-12">

                        <div class="alert alert-warning">
                            Оффер на модерации.
                        </div>
                    </div>
                </div>
            @elseif($data->checked == 0 && $data->balance > 49 && $moderate == false)
                <div class="row mb-2">
                    <div class="col-12">

                        <div class="alert alert-warning">
                            Пожалуйста, заполните и сохраните информацию для проверки оффера!
                        </div>
                    </div>
                </div>
            @endif

            <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-comment-detail font-18 me-1"></i>
                            </div>
                            <div class="tab-title"> Детали </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-cog font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Настройки</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#creo" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-star font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Промоматериалы</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#api" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-book-content font-18 me-1"></i>
                            </div>
                            <div class="tab-title">API</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#stat" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-stats font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Статистика</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#financials" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-dollar font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Финансы оффера</div>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="card">
                <div class="row g-0">
                    <div class="row mt-3">
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                <table class="table table-responsive table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 500px;"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Тип проекта</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->type }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Тип действий</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->action }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Установленная ставка/вознограждение</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->sale_percent }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>URL трафика</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->traffic_url }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>URL основной</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->url }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Баланс</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->balance }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Мин. пополнение</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->price_min }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Мин. баланс оффера</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->min_balance }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Создан</b>
                                            </td>
                                            <td>
                                                <span>{{ $data->created_at }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Статус</b>
                                            </td>
                                            <td>
                                                <span>
                                                    @if($data->created_at == 0)
                                                        На модерации
                                                    @else
                                                        Проверен
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                <form action="/action/offer/edit/details/{{ $data->id }}" method="post" id="form_settings">
                                    @csrf
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="form-group mb-3">
                                        <label>Доп. информация для вебмастеров.</label>
                                        <textarea class="form-control" id="infodetails" name="infodetails" required="">{{ $obj->getDetails($data->id, 'info_details') }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="age_category">Возрастная категория</label>
                                        <select class="form-control" id="age_category" name="age_category">
                                            <option value="Любой">Любой</option>
                                            <option value="от 14 до 21">от 14 до 21</option>
                                            <option value="от 21 до 35">от 21 до 35</option>
                                            <option value="от 35 до 47">от 35 до 47</option>
                                            <option value="от 47 до 60">от 47 до 60</option>
                                            <option value="от 60 и старше ">от 60 и старше </option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="gender">Пол аудитории</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="Любой">Любой</option>
                                            <option value="Мужской">Мужской</option>
                                            <option value="Женский">Женский</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="mb-2" for="countries">Страны</label>
                                        <br>
                                        <input class="form-control" type="text" name="countries" hidden>
                                        <span class="badge badge-default select_country" data-id="#Любая">Любая</span>
                                        <span class="badge badge-default select_country" id="" data-id="#Россия">Россия</span>
                                        <span class="badge badge-default select_country" id="" data-id="#СНГ">СНГ</span>
                                        <span class="badge badge-default select_country" id="" data-id="#Украина">Украина</span>
                                        <span class="badge badge-default select_country" id="" data-id="#Казахстан">Казахстан</span>
                                        <span class="badge badge-default select_country" id="" data-id="#Англия">Англия</span>
                                        <span class="badge badge-default select_country" id="" data-id="#Белорусия">Белорусия</span>
                                    </div>
                                    <script>
                                        $('.select_country').on('click', function () {
                                            $(this).toggleClass("selected");
                                            let attr = $(this).attr('data-id');

                                            let input_value = $('input[name="countries"]').val();

                                            if (input_value.indexOf($(this).attr('data-id'), 0) !== -1) {
                                                input_value = input_value.split(attr).join('');
                                                $('input[name="countries"]').val(input_value);
                                            } else {
                                                input_value = input_value + $(this).attr('data-id');
                                                $('input[name="countries"]').val(input_value);
                                            }
                                        });
                                    </script>
                                    <style>
                                        .badge-default {
                                            background: rgba(0,0,0,.2);
                                            cursor: pointer;
                                            font-weight: inherit;
                                            font-size: 15px;
                                        }
                                        .badge.selected {
                                            background: #00ad00;
                                        }
                                    </style>

                                    <div class="form-group mb-3">
                                        <label for="details_product">Полное описание продукта или услуги.</label>
                                        <textarea class="form-control" id="details_product" name="details_product">{{ $obj->getDetails($data->id, 'details_product') }}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="accept_money">Прием валют или кошельки оплаты, если цель продажи. </label>
                                        <textarea class="form-control" id="accept_money" name="accept_money">{{ $obj->getDetails($data->id, 'accept_money') }}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="help_methods">Укажите способы или инструменты помощи веб-мастеров в продажи ваших услуг или товаров.(прогреваем через кол центр, рассылаем Email оповещение, проводим оповещение через соц-сети, проводим стримы или вебинары)  </label>
                                        <textarea class="form-control" id="help_methods" name="help_methods">{{ $obj->getDetails($data->id, 'help_methods') }}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="advantage_product">Ваше преимущество перед подобными проектами - компаниями - продуктами</label>
                                        <textarea class="form-control" id="advantage_product" name="advantage_product">{{ $obj->getDetails($data->id, 'advantage_product') }}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="accept_traffic">Разрешенные источники трафика.</label>
                                        <textarea class="form-control" id="accept_traffic" name="accept_traffic">{{ $obj->getDetails($data->id, 'accept_traffic') }}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="reject_traffic">Запрещенные источники трафика.</label>
                                        <textarea class="form-control" id="reject_traffic" name="reject_traffic">{{ $obj->getDetails($data->id, 'reject_traffic') }}</textarea>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-3" id="send">Сохранить</button>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane fade pb-3" id="creo" role="tabpanel">
                                @if (count($creatives) > 0)
                                    <div>
                                        <h5>Промоматериалы</h5>
                                        <table class="table table-responsive table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 25%;">Название</th>
                                                <th style="width: 35%;">Путь</th>
                                                <th style="width: 25%;">Предпросмотр</th>
                                                <th style="width: 30%;"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($creatives as $creative)
                                                <tr valign="middle">
                                                    <td>{{ $creative->title }}</td>
                                                    <td>{{ $creative->url }}</td>
                                                    <td>
                                                        @if ($creative->img != '')
                                                            <img src="/uploads/creo/{{ $creative->img }}" alt="" style="max-width: 50px;">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/action/offer/removeCreo/{{ $creative->id }}" class="text-danger" style="font-size: 20px;">
                                                            <i class="bx bx-trash-alt mr-3"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p class="mt-0">Промоматериалов пока нет.</p>
                                @endif

                                <hr class="mt-5 mb-5">

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="/action/offer/addCreo" method="post">
                                                    <h6>Добавить лендинг</h6>
                                                    @csrf
                                                    <input type="text" value="{{ $data->id }}" name="id" hidden>
                                                    <input type="text" value="land" name="type" hidden>
                                                    <div class="form-group">
                                                        <label for="">Название лендинга</label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="">Ссылка</label>
                                                        <input type="text" class="form-control" name="url">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-primary mt-2">Добавить</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="/action/offer/addCreo" method="post" enctype="multipart/form-data">
                                                    <h6>Добавить баннер</h6>
                                                    @csrf
                                                    <input type="text" value="{{ $data->id }}" name="id" hidden>
                                                    <input type="text" value="image" name="type" hidden>
                                                    <div class="form-group">
                                                        <label for="">Название баннера</label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="">Ссылка</label>
                                                        <input type="file" class="dropify" name="image">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-primary mt-2">Добавить</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="api" role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#apikey_change" data-toggle="tab" role="tab" aria-selected="true">Api ключ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#api_integration_and_testing" data-toggle="tab" role="tab" aria-selected="false">Тестирование и доп. интеграция</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="apikey_change" role="tablist">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <label>Api ключ</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text" style="padding-top: 0px;padding-bottom: 0px;height: 100%;">
                                                            <button onclick="updateToken()" class="btn btn-sm" style="width:100%;" ><i class="fas fa-sync"></i></button>
                                                        </div>
                                                    </div>
                                                    <input type="text" readonly="" value="{{ $api->getToken($data->id) }}" class="form-control" id="apiToken">
                                                </div>
                                                <small>
                                                    Данный ключ позволяет управлять оффером, по этой причине настоятельно рекомендуем не предоставлять данный ключ третьим лицам.
                                                    <span style="color:red">Внимание! Смена API ключа требует его замены в скриптах подтверждения, все последствия несвоевременной замены обновленного ключа возлагаются на владельца оффера, которому может быть выставлен штраф за невалидный ключ подтверждения.</span>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="api_integration_and_testing" role="tablist">
                                        <div class="form-group">
                                            <label>Адрес обработчика по выдаче доп. информации о посетителе</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                        <button class="btn btn-primary">Сохранить</button>
                                        <button class="btn btn-warning">Сделать тестовый запрос</button>
                                        <hr>
                                        <div class="response_viewer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="stat" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Тестовых запросов</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-middle"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="mt-1 mb-0">0</h2>
                                            </div>
                                        </div>



                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Заявок в ожидании</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-middle"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="mt-1 mb-0">0</h2>
                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Заявок подтверждено</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-middle"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="mt-1 mb-0">0</h2>
                                            </div>
                                        </div>



                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Посетителей за сегодня</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-middle"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="mt-1 mb-0">0</h2>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">

                                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#apihis" role="tab" aria-controls="nav-home" aria-selected="true">Api</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#visiters" role="tab" aria-controls="nav-profile" aria-selected="false">Посетители</a>
                                                    </li>
                                                </ul></div>

                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="apihis" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody><tr>
                                                                <th>
                                                                    Дата
                                                                </th>
                                                                <th>
                                                                    Событие
                                                                </th>
                                                                <th>
                                                                    Детали
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    Нет данных
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="visiters" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody><tr>
                                                                <th>
                                                                    Дата
                                                                </th>
                                                                <th>
                                                                    Отпечаток
                                                                </th>
                                                                <th>
                                                                    Referer
                                                                </th>
                                                                <th>
                                                                    Страна
                                                                </th>
                                                            </tr>


                                                            <tr>
                                                                <td>2021-07-05 17:40</td>
                                                                <td>
                                                                    176.59.109.212<br>
                                                                    Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0
                                                                </td>
                                                                <td>

                                                                    ----

                                                                </td>
                                                                <td>

                                                                    RU

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2021-07-05 17:40</td>
                                                                <td>
                                                                    176.59.109.212<br>
                                                                    Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0
                                                                </td>
                                                                <td>

                                                                    ----

                                                                </td>
                                                                <td>

                                                                    RU

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2021-07-05 14:30</td>
                                                                <td>
                                                                    176.59.109.212<br>
                                                                    Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0
                                                                </td>
                                                                <td>

                                                                    ----

                                                                </td>
                                                                <td>

                                                                    RU

                                                                </td>
                                                            </tr>


                                                            </tbody></table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="financials" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr valign="middle">
                                                                <td style="width:25%;"><b>Баланс</b></td>
                                                                <td class="">
                                                                    {{ $data->balance }}
                                                                </td>
                                                                <td>
                                                                    <button class="btn btn-light">
                                                                        Пополнить баланс
                                                                    </button>
                                                                    <button class="btn btn-light">
                                                                        Вывести средства
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Минимальный баланс</b></td>
                                                                <td>{{ $data->balance }}</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
        </div>
    </div>

    <script>
        function updateToken() {
            $.get(
                '/api/offers/update/token/{{ $data->id }}',
                {},
                function (data) {
                    $('#apiToken').val(data);
                    toastr.success('Пожалуйста, замените его в скриптах!', 'Токен успешно обновлен');
                }
            );
        }
    </script>
@endsection

@section('post-upload')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.dropify').dropify();
    </script>
@endsection
