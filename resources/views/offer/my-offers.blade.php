@extends('layouts.lk')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-header border-bottom bg-transparent">
                            <div class="d-flex align-items-center pt-2 pb-2">
                                <div>
                                    <h6 class="mb-0">Мои офферы</h6>
                                </div>
                                <div class="font-22 ms-auto">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-th">
                                    <thead>
                                    <tr>
                                        <th>Дата</th>
                                        <th>Сумма</th>
                                        <th>Тип</th>
                                        <th>Счет\Детали	</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="5">
                                            У Вас пока нет транзакций в истории
                                        </td>
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
@endsection
