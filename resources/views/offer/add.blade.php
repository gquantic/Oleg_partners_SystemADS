@extends('layouts.lk')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <div class="page-wrapper">
        <div class="page-content">
            <!--end row-->
            <div class="row">
                <div class="col-lg-12 alert alert-danger">
                    Пожалуйста, ознакомьтесь с
                    <a href="/rules/add-offer" style="color: inherit; border-bottom: 1px solid;" target="_blank">
                        правилами создания офферов
                    </a>
                    перед началом.
                </div>
                <main class="content">
                    <div class="container-fluid">




                        <style>
                            .step{
                                display:none;
                            }

                            .step.active_step{
                                display:block;
                            }

                        </style>
                        <div class="row">
                            <div class="col-xs-12 col-md-8 w-100">
                                <div class="card" style="margin-bottom:150px;">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="csrf_token" value="IjU0OWIyZTIyZWVjOGFkNzA3MjAyYjc4NzUzYjdjMWExYmZmYzQ4ZjEi.YYKgCQ.ziPcpgVfahsAD4bHjHqToAIDK4U">
                                            <div class="step active_step">
                                                <center>
                                                    <h2>Правила создания оффера</h2>
                                                    <h3>Уведомление</h3>
                                                    <ol>
                                                        <li>
                                                            Если вы желаете продвигать или продавать несколько товаров одной категории, то можно создать единый оффер. Пример: Косметика для женщин (духи, туш для ресниц, пудра) </li>
                                                        <li> Если вы желаете продвигать или продавать несколько товаров разной категории, для более успешного продвижения вам потребуется создать несколько офферов. Пример: Он-лайн магазин, все для мужчин и Женщин (мужские духи, женские духи) Так как в данном случае Веб мастерам потребуется вести к вам две категории мотивированных клиентов. </li>
                                                    </ol>
                                                    <button class="next_step btn btn-outline-primary mt-3" type="button">Далее</button>
                                                </center>
                                            </div>
                                            <div class="step ">
                                                <div class="row">
                                                    <div class="form-group mb-3">
                                                        <label for="" class="mb-2">Изображения оффера</label>
                                                        <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                                        <center>
                                                            <button type="button" class="btn btn-default prev-step mt-3">Назад</button>
                                                            <button class="next_step btn btn-outline-primary mt-3" type="button">Далее</button>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step">
                                                <div class="row">
                                                    <div class="col-lg-7 m-auto ">
                                                        <div class="form-group">
                                                            <label for="name">Название оффера</label>

                                                            <input class="form-control" id="name" name="name" required="" type="text" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Укажите основной url проекта вашего оффера</label>

                                                            <input type="text" name="url" class="form-control">
                                                        </div>

                                                        <div class="form-group">

                                                            <label><label for="project_type">Тип проекта</label></label>

                                                            <select class="form-control" id="project_type" name="project_type"><option value="19">Рестораны с он-лайн заказом</option><option value="6">Аксессуары и Гаджеты</option><option value="7">Инвестиционные проекты – компании</option><option value="8">Акции и акционерные компании</option><option value="9">Форекс и Трейдинг</option><option value="10">Финансовые игры - HYIPs</option><option value="11">МЛМ и Сетевой маркетинг</option><option value="12">Казино и Лотереи – Gambling</option><option value="13">Букмейкеры и Ставки на спорт</option><option value="14">Препараты и фармакология - Nutra</option><option value="15">Обучение, курсы и тренинги</option><option value="16">Онлайн магазины, Продажа товаров - Marketplace </option><option value="17">Кошельки, Платежные шлюзы, Обменники</option><option value="18">Банки и Кредитные организации</option><option value="20">Игры, IT и приложения</option><option value="21">Кэш-Бек сервисы</option><option value="22">Гаджеты</option><option value="23">Dating</option><option value="24">Туризм и Путешествия</option><option value="26">Иное - Другая категория </option></select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Детальное описание оффера</label><br>
                                                            <small>Детальное описание действия по офферу</small>

                                                            <textarea class="form-control" id="details" name="details" required=""></textarea>
                                                        </div>
                                                        <center>
                                                            <button type="button" class="btn btn-default prev-step mt-3">Назад</button>
                                                            <button class="next_step btn btn-outline-primary mt-3" type="button">Далее</button>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step">
                                                <div class="row">
                                                    <div class="col-lg-7 m-auto ">
                                                        <div class="form-group">

                                                            <label>Тип действий</label>

                                                            <select class="form-control" id="action_id" name="action_id"><option value="1">Sale</option><option value="2">Revshare</option><option value="3">CPA</option></select>
                                                        </div>

                                                        <div class="form-group pricefix" style="display:none">
                                                            <label>Вознаграждение за ед. выполнение</label>

                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">$</span>
                                                                </div>
                                                                <input type="text" name="price" class="form-control">

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-12 actions" style="display:none">

                                                                <div class="form-group">
                                                                    <label>Описание действия</label>

                                                                    <textarea class="form-control" id="action_details" name="action_details"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Валюта товара</label>
                                                                    <select class="form-control" id="currency_item" name="currency_item"><option value="USD">USD</option><option value="GBR">GBR</option><option value="EUR">EUR</option><option value="RUB">RUB</option><option value="UAH">UAH</option><option value="KZT">KZT</option></select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Если требуется взнос, покупка, вклад или иное финансовое действие от клиентов, укажите сумму. Сумма чека должна быть фиксированная. Если подразумевается несколько видов товаров или услуг с разными суммами чека, то выберите иной тип действия, RevShare или Sale.</label>

                                                                    <input class="form-control" id="action_amount" name="action_amount" type="text" value="0.00">
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-md-12 sellings">
                                                                <div class="form-group">
                                                                    <label>Укажите процент с продажи</label>

                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="inputGroupPrepend">%</span>
                                                                        </div>
                                                                        <input class="form-control" id="percent_rate" name="percent_rate" type="text" value="0.00">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Валюта продажи товара</label>
                                                                    <select class="form-control" id="product_currency" name="product_currency"><option value="USD">USD</option><option value="GBR">GBR</option><option value="EUR">EUR</option><option value="RUB">RUB</option><option value="UAH">UAH</option><option value="KZT">KZT</option></select>
                                                                </div>
                                                                <div class="row">



                                                                    <div class="col-xs-12 col-md-6 ">
                                                                        <div class="form-group">
                                                                            <label>Мин. стоимость продукта</label>

                                                                            <input class="form-control" id="min_price" name="min_price" type="text" value="0.00">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 ">
                                                                        <div class="form-group">
                                                                            <label>Макс. стоимость продукта</label>

                                                                            <input class="form-control" id="max_price" name="max_price" type="text" value="0.00">
                                                                        </div>


                                                                    </div>


                                                                </div>




                                                            </div>
                                                            <div class="col-xs-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label><label for="traffic_url">URL для получения трафика</label></label>

                                                                    <input type="text" name="traffic_url" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Укажите ссылку на ваш телеграмм или почту, для связи модератора.</label>
                                                                    <input type="text" name="contact_link" class="form-control">
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="mt-3">
                                                            <center>
                                                                <button type="button" class="prev-step btn btn-default">Назад</button>
                                                                <button class="btn btn-outline-primary">Добавить</button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $("input[name=icon]").change(function(){
                                var file = new FileReader();
                                file.onload = function(e){
                                    $(".icon_offer").attr("src",e.target.result)
                                }
                                file.readAsDataURL($("input[name=icon]")[0].files[0])
                            })
                            $(".next_step").click(function(){
                                $(".active_step").animate({"opacity":0},function(){
                                    $(this).removeClass("active_step");
                                    $(this).next().css({"opacity":0}).addClass("active_step");
                                    $(this).next().animate({"opacity":1})
                                })
                            })
                            $(".prev-step").click(function(){
                                $(".active_step").animate({"opacity":0},function(){
                                    $(this).removeClass("active_step");
                                    $(this).prev().css({"opacity":0}).addClass("active_step");
                                    $(this).prev().animate({"opacity":1})
                                })
                            })
                            $("#action_id").change(function(){
                                if($(this).val()==4){
                                    /* $(".sellings").animate({"opacity":0},function(){
                                         $(".sellings").hide();
                                         $(".views").animate({"opacity":0},function(){$(".views").show();})
                                     })*/
                                    $(".actions").hide()
                                    $(".sellings").hide()
                                    $(".pricefix").show()
                                    $(".pricefix label").html("Цена за 1000 переходов")
                                }else if($(this).val()==3){
                                    $(".sellings").hide()
                                    $(".actions").show()
                                    $(".pricefix label").html("Вознаграждение за ед. выполнение")
                                    $(".pricefix").show()
                                }else{
                                    $(".sellings").show()
                                    $(".views").hide()
                                    $(".pricefix").hide()
                                    $(".actions").hide()
                                }
                            })


                            $("input[name=fixed_price]").change(function(){
                                if($(this).is(":checked")){
                                    $("input[name=max_price], input[name=min_price]").parents(".form-group").parent().hide();
                                    $("input[name=price]").parents(".form-group").parent().show();
                                }else{
                                    $("input[name=max_price], input[name=min_price]").parents(".form-group").parent().show();
                                    $("input[name=price]").parents(".form-group").parent().hide();
                                }
                            })
                        </script>

                    </div>
                </main>
            </div>
        </div>
    </div>
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
@endsection
