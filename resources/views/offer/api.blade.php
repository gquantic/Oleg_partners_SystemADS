@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                    <div class="main">
                        <main class="content">
                            <div class="container-fluid">
                                <style>
                                    .nav-tabs .nav-link.active{
                                        background:white;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#api" role="tab" aria-controls="home" aria-selected="true">API</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#metrika" role="tab" aria-controls="profile" aria-selected="false">Модуль Метрики</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#additional" role="tab" aria-controls="contact" aria-selected="false">Дополнительная интеграция</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="api" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="card ">
                                                    <div class="card-body">
                                                        <div class="alert alert-primary ">
                                                            <div class="alert-message">
                                                                Для доступа к API необходимо наличие подходящих офферов и Api-ключ. Api ключ обязателен в каждом запросе.Ниже указаны доступные для данного аккаунта методы.
                                                                <hr>
                                                                Для тестирования подтверждений в качестве get параметра необходимо добавить параметр test=1
                                                                <hr>
                                                                При переходе пользователя на офер-сайт, GET параметром будет передан его UUID. Данный идентификатор необходимо сохранять и привязывать к пользователю для идентификации действий на всем протяжении работы с данной платформой.
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">Текущая версия api</div>
                                                            <div class="card-body">
                                                                URL- https://systemads.ru/api/version<br>
                                                                Формат ответа - <span class="badge badge-secondary" style="background: #6f42c1;">JSON</span><br>
                                                                Пример ответа - {"version": "0.0.1"}
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">Запрос на начало действия</div>
                                                            <div class="card-body">
                                                                <p>Отправляется к примеру при посещении посетителя анкеты заполнение которой оплачивается, но до заполнения анкеты.</p>
                                                                URL- https://systemads.ru/api/request/unconfirm?uuid=uuid<br>
                                                                Формат ответа - <span class="badge badge-secondary" style="background: #6f42c1;">JSON</span><br>
                                                                Метод запроса - <span class="badge badge-primary" style="background: #0b5ed7;">PUT</span><br>
                                                                Данные запроса uuid - <span class="badge badge-warning" style="background: orangered;">UUID посетителя с платформы</span><br>
                                                                Пример успешного ответа - {"status": "success"}<br>

                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">Подтверждение сделки по Revshare или Sale</div>
                                                            <div class="card-body">
                                                                <p>После исполнения запрошенного действия необходимо совершить данный запрос для подтверждения и оплаты. Необходимо указать сумму продажи для подсчета системой вознаграждения GET параметром amount .</p>
                                                                URL- https://systemads.ru/api/sale/confirm?uuid=`uuid`&amp;amount=`product_price`<br>
                                                                Формат ответа - <span class="badge badge-secondary" style="background: #6f42c1;">JSON</span><br>
                                                                Метод запроса - <span class="badge badge-primary" style="background: #0b5ed7;">PUT</span><br>
                                                                Данные запроса uuid - <span class="badge badge-warning" style="background: orangered;">UUID посетителя с платформы</span><br>
                                                                Данные запроса amount - <span class="badge badge-warning" style="background: orangered;">Полная сумма продажи</span><br>
                                                                Пример успешного ответа - {"status": "success"}<br>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">Подтверждение сделки по CPA</div>
                                                            <div class="card-body">
                                                                <p>После исполнения запрошенного действия необходимо совершить данный запрос для подтверждения и оплаты. </p>
                                                                URL- https://systemads.ru/api/cpa/confirm?uuid=`uuid`<br>
                                                                Формат ответа - <span class="badge badge-secondary" style="background: #6f42c1;">JSON</span><br>
                                                                Метод запроса - <span class="badge badge-primary" style="background: #0b5ed7;">PUT</span><br>
                                                                Данные запроса uuid - <span class="badge badge-warning" style="background: orangered;">UUID посетителя с платформы</span><br>

                                                                Пример успешного ответа - {"status": "success"}<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="metrika" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="card ">
                                                    <div class="card-body">
                                                        <div class="alert alert-primary ">
                                                            <div class="alert-message">
                                                                Для сбора дополнительной информации о поведении пользователя подключите скрипт в код каждой страницы вашего сайта.
                                                            </div>
                                                        </div>
                                                        <p>
                                                            Для подключения разместите код <br>
                                                        </p>
                                                        <xmp><script src="https://systemads.ru/static/integration/mt.js"></script></xmp>
                                                        в нижней части шаблона вашего сайта.
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="card ">
                                                    <div class="card-body">
                                                        <div class="alert alert-primary ">
                                                            <div class="alert-message">
                                                                Для обеспечения некоторых функций и дополнительного доверия к офферу, а так же для ускоренной авто проверок, на сайте оффера необходимо обеспечить ответ на запрос нашего сервиса. В «GET» параметре запроса будет передан «UUID» интересующего пользователя. В ответ нужно отправить «json» данные с полями указанные ниже.
                                                            </div>
                                                        </div>
                                                        <p>
                                                            Ниже указана структура json данных ответа сервера оффера.
                                                        </p><table class="table">
                                                            <tbody><tr>
                                                                <td>
                                                                    UUID(string)
                                                                </td>
                                                                <td>
                                                                    «UUID» индивидуальная метка пользователя по которому выдается информация.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    payment_actions[array]
                                                                </td>
                                                                <td>
                                                                    Содержит все оплачиваемые действия совершенные данным пользователем.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    payment_actions[int action_id][created_on](string)
                                                                </td>
                                                                <td>
                                                                    Дата совершения оплачиваемого действия (YYYY-MM-DD HH:MM:SS).
                                                                </td>
                                                            </tr><tr>
                                                                <td>
                                                                    payment_actions[int action_id][amount](float)
                                                                </td>
                                                                <td>
                                                                    Сумма покупки (указывается в USD) в случае если тип трафика Sale\RevShare.
                                                                </td>
                                                            </tr>
                                                            </tbody></table>
                                                        <p></p>
                                                    </div>
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
        </div>
    </div>
@endsection
