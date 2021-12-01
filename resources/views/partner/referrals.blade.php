@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="main">
                    <div class="card ">
                        <div class="card-header">Реферальная программа</div>
                        <div class="card-body">

                            Основная реферальная ссылка: https://systemads.ru/r/1<br>

                            Ваш Реф. процент 10%.  Ставка за приглашения 50$
                            <br><br>
                            <b>Таблица рефералов</b>
                            <div class="table_responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>Дата</th>
                                        <th>Email</th>
                                        <th>Ставка(%)</th>
                                        <th>Ед. вознаграждение(50$)</th>
                                        <th>Доход($)</th>
                                    </tr>
                                    </tbody>
                                </table>
                                <tr>
                                    <td colspan="3"><center>Нет данных</center></td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
