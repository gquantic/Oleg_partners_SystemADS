@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <main class="content">
                    <div class="container-fluid">
                        <style>
                            table td{
                                line-height:31px;
                            }
                            .current_link{
                                word-wrap: anywhere;
                            }
                        </style>
                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="card-header">
                                    Список источников
                                    <a href="/offer/all" class="btn btn-primary btn-sm float-right">Добавить ссылку</a>
                                </div>
                                <div class="card-body">
                                    <table class="table  table-striped table-bordered table-sm">
                                        <tbody><tr>
                                            <th>
                                                Имя
                                            </th>
                                            <th>
                                                Детали
                                            </th>
                                            <th>
                                                Переходов
                                            </th>

                                            <th>
                                                Оплачено действий
                                            </th>
                                            <th>
                                                В ожидании
                                            </th>
                                            <th>
                                                Заработано
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Первый</td>
                                            <td>
                                                <button class="btn btn-dark btn-sm showmaterials" data-offer_id="1">Материалы</button>
                                                <button class="btn btn-dark btn-sm showdetails" data-offer_id="1">Основное</button>
                                            </td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0.00 $</td>
                                        </tr>
                                        <tr>
                                            <td>Второй</td>
                                            <td>
                                            <span class="badge badge-warning" style="color: #0d0f12">
                                                Оффер выключен
                                            </span>
                                            </td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0.00 $</td>
                                        </tr>
                                        <tr>
                                            <td>Третий</td>
                                            <td>
                                                <button class="btn btn-dark btn-sm showmaterials" data-offer_id="3">Материалы</button>
                                                <button class="btn btn-dark btn-sm showdetails" data-offer_id="3">Основное</button>
                                            </td>
                                            <td>6</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>3.00 $</td>
                                        </tr>
                                        <tr>
                                            <td>Четвертый</td>
                                            <td>
                                                <button class="btn btn-dark btn-sm showmaterials" data-offer_id="4">Материалы</button>
                                                <button class="btn btn-dark btn-sm showdetails" data-offer_id="4">Основное</button>
                                            </td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1.00 $</td>
                                        </tr>
                                        <tr>
                                            <td>Пятый</td>
                                            <td>
                                                <button class="btn btn-dark btn-sm showmaterials" data-offer_id="5">Материалы</button>
                                                <button class="btn btn-dark btn-sm showdetails" data-offer_id="5">Основное</button>
                                            </td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>20.00 $</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal" tabindex="-1" role="dialog" id="createlink">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content ">
                                        <div class="modal-header ">
                                            <h5 class="modal-title">Добавление потока привлечения клиентов</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Для создания ссылки выберите подходящий оффер ниже.</p>
                                            <table class="table ">
                                                <tbody><tr>
                                                    <th>Оффер</th>
                                                    <th>Оплата</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td>NYBroker</td>
                                                    <td>За продажи</td>
                                                    <td>
                                                        <button class="btn-dark btn btn-sm" data-toggle="modal" data-target="#newlinkname">Создать
                                                        </button><button class="btn-secondary btn btn-sm">Об оффере</button>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                            <small>* Офферы отображены доступные для вашего аккаунта. По мере увеличения трафика, его качества и объема список офферов для вашего аккаунта расширится.</small>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" tabindex="-1" role="dialog" id="offerpromo">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Список промо-материалов оффера</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" tabindex="-1" role="dialog" id="offerdetails">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Описание оффера</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-8 text-left">
                                <ul class="list-inline">

                                    <li class="list-inline-item">
                                        <a class="text-muted" href="/#contact">Связь с нами</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4 text-right">
                                <p class="mb-0">
                                    © 2021 - <a href="/" class="text-muted">SystemAds</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection
