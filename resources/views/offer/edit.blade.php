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

            @if($data->checked == 0 && $data->balance < 50)
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            Пожалуйста, пополните баланс для отправки на модерацию!
                        </div>
                    </div>
                </div>
            @elseif($data->checked == 0 && $data->balance > 49 && $moderate == "wait")
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
                    <a class="nav-link" data-bs-toggle="tab" href="#balance" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-star font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Промоматериалы</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#balance" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-book-content font-18 me-1"></i>
                            </div>
                            <div class="tab-title">API</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#balance" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-stats font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Статистика</div>
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
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <p>Промоматериалов пока нет.</p>
                            </div>
                            <div class="tab-pane fade" id="balance" role="tabpanel">
                                <dl class="row">
                                    <dt class="col-sm-3">Баланс оффера</dt>
                                    <dd class="col-sm-9">0 <a href="/offer/pay/{{ $data->id }}" class="ml-2">Пополнить</a></dd>

                                    <dt class="col-sm-3">В холде</dt>
                                    <dd class="col-sm-9">0</dd>

                                    <dt class="col-sm-3">Всего выплачено</dt>
                                    <dd class="col-sm-9">0</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('post-upload')

@endsection
