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
                                    <h5 class="mb-0">Мои офферы</h5>
                                </div>

                                <a href="{{ route('offer-add') }}" class="btn btn-primary">Добавить оффер</a>
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

                                    @if($controller->checkDetails($offer->id) != false && $controller->checkModeration($offer->id) == "approved")
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end">
                                                @if($offer->active == "paused")
                                                    <a href="/action/offer/edit/active/{{ $offer->id }}">
                                                        <button class="btn btn-success"><i class="bx bx-play"></i> Возобновить оффер</button>
                                                    </a>
                                                @else
                                                    <a href="/action/offer/edit/active/{{ $offer->id }}">
                                                        <button class="btn btn-warning"><i class="bx bx-pause"></i> Приостановить оффер</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                    @if($controller->checkDetails($offer->id) != false && $controller->checkModeration($offer->id) == "wait")
                                        <p class="text-white p-1 bg-warning mb-0" style="padding-left: 7px !important;border-radius: 4px;">Оффер на модерации</p>
                                    @endif

                                    @if($controller->checkDetails($offer->id) == false)
                                        <a href="/offer/my/{{ $offer->id }}/edit">
                                            <p class="text-white p-1 bg-danger mb-0" style="padding-left: 7px !important;border-radius: 4px;">Продолжите заполнение</p>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
