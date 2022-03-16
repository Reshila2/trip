<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Cent.kz</title>
    <meta name="description" content="Описание страницы">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="theme-color" content="#FBCC21">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="CENT" />
    <meta property="og:image" content="Сюда вставить вашу картинку" />
    <meta property="og:title" content="Ваш заголовок" />
    <meta property="og:url" content="Ваш URL страницы" />
    <meta property="og:description" content="Ваше описание" />
</head>

<body>
<div class="main">
    <div class="container">
        <header class="header">
            <div class="header-top">
                <div class="header-adress">
                    <button class="hamburger hamburger--collapse" type="button" style="display:none;">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                    <div class="select-city" style="display:none;">
                        <i class="icon-city"></i>
                        <p>Выберите город</p>
                        <ul class="dropdown-city">
                            <li>Алматы</li>
                            <li>Астана</li>
                            <li>Павлодар</li>
                            <li>Шымкент</li>
                        </ul>
                    </div>
                </div>
                <div class="header-buttons">
                    <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
                    <!-- <button class="btn btn-help">Помощь</button>-->
                    <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
                </div>
            </div>
            <div class="header-bottom">
                <a class="logo" href="/"><img src={{asset("/img/logo8.png")}}></a>
                <ul class="menu">
                    <li class="menu-item"><a href="#"><i class="icon-basket"></i>
                            <p style="margin-top: 10px">Корзина</p>
                        </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-hearth"></i>
                            <p style="margin-top: 10px">Избранное</p>
                        </a></li>


                    <li class="menu-item "> <a href="{{ url('/login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fas fa-sign-in-alt"></i> Log in</a></li>

                    {{--                        @if (Route::has('login'))--}}
                    {{--           <p style="margin-top: 10px">Личный кабинет</p>--}}
                    {{--                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
                    {{--                                    @auth--}}
                    {{--                                        <a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
                    {{--                                    @else--}}

                    {{--                                        @if (Route::has('register'))--}}

                    {{--                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                    {{--                                        @endif--}}
                    {{--                                    @endauth--}}
                    {{--                                </div>--}}
                    {{--                            @endif--}}
                    </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-settings"></i>
                            <p style="margin-top: 10px">Настройки</p>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
            <a href="javascript:void(0)" onclick="window.history.back()">Назад</a><br><br>
                @extends('layouts/footer')
                @extends('layouts/form')
        <div class="basket-page">
            <div class="container">
                <h1>Корзина</h1>
                <div class="basket_items">
                    <div class="basket_item">

{{--                        <img src="">--}}
{{--                        <div class="basket_info">--}}
{{--                            <h2>  Вы выбрали продукт <b><a href="/show/100" target="_blank">Набор подарочный с брошью</a></b> стоимостью 8 300 тг.  </h2>--}}
{{--                            <p>Пастила белевская, пастила фруктовая, брошь керамическая ручной работы на булавке.</p>--}}


                        </div>
                    </div>
                    <div class="feedback-form">
                        <div class="feedback-form_item cart_item">
                            <br>
                            <input type="text" id="carte" name="e" value="" placeholder="Имя" class="form-control rounded-0 " style="display:none;">
                            <input type="text" id="cartname" name="ofname" value="" placeholder="Имя" class="form-control rounded-0 forcart">


                            <input type="text" id="carttel" name="olname" value="" placeholder="Фамилия" class="form-control rounded-0 forcart">

                        </div>
                        <div class="feedback-form_item cart_item">
                            <input type="text" id="carte2" name="e2" value="" placeholder="Имя" class="form-control rounded-0 " style="display:none;">
                            <input type="text" id="carteml" name="oemail" value="" placeholder="E-mail" class="form-control rounded-0 forcart">
                            <input type="text" id="carttel" name="otel" value="" placeholder="Телефон" class="form-control rounded-0 forcart">
                        </div>
                        <div class="feedback-form_item cart_item">
                            <input type="text" id="carte3" name="e3" value="" placeholder="Имя" class="form-control rounded-0 " style="display:none;">


                        </div>

                        <div class="col-md-12">


                            <input type="hidden" id="agrISN" name="argISN" value="0" class="forcart">
                            <input type="hidden" id="mISN" name="mISN" value="0" class="forcart">
                        </div>






                        <div class="feedback-form_item_ cart_item_">
                            <a href="javascript:void(0);" id="sendb" class="btn btn-black rounded-0 py-2 px-2" onclick="CreateOrder()" style="cursor:pointer;">Заказать</a>
                        </div>


                        <div class="col-md-12" id="cartmesres">
                        </div>

                        <form action="https://epay.kkb.kz/jsp/process/logon.jsp" method="post" style="display:none">
                            <input type="hidden" name="Signed_Order_B64" id="Signed_Order_B64" value="">
                            <input type="hidden" id="Email" name="Email" value="">
                            <input type="hidden" name="Language" value="rus">
                            <input type="hidden" name="BackLink" id="BackLink" value="https://cent.kz/">
                            <input type="hidden" name="FailureBackLink" id="FailureBackLink" value="https://cent.kz/">
                            <input type="hidden" name="PostLink" value="https://cent.kz/responsem.php">
                            <input type="hidden" name="appendix" id="appendix" value="">

                            <button class="button button--prime" data-behavior="analytics" data-analytics-action="pay_kkb" id="gotoepay">Оплатить</button>
                        </form>
                        <br><br>
                        <div class="feedback-form_item cart_item">
                            <input type="text" id="carte6" name="e6" class="form-control rounded-0 " style="display:none;"><input type="text" id="promocode" name="promocode" value="" placeholder="Промокод" class="form-control rounded-0 " style="width:100%;">
                        </div>
                        <div class="feedback-form_item_ cart_item_">
                            <a href="javascript:void(0);" id="sendb" class="btn btn-black rounded-0 py-2 px-2" onclick="PayOrderbyPromo()" style="cursor:pointer;">Заказать по промокоду</a>
                        </div>
                        <br>
                        <div class="col-md-12" id="promomesres">
                        </div>
                    </div>
                    <input type="hidden" id="realprice" value="8300">
                    <input type="hidden" id="curentprodid" value="100">
                    <script>

                        function counttotal(){

                            if (intval($("#cartq").val())<1){
                                $("#totalprice").html('&nbsp;');
                                $("#cartq").val('');

                            }
                            else {
                                price=$("#cartq").val()*$("#realprice").val();
                                $("#totalprice").html('Итого: <b>'+number_format(price, 0, '.', ' ')+'</b> тг.');
                            }
                        }



                        function PayOrderbyPromo(){
                            if(window.inProgresm){return;}
                            $("#promomesres").html('').removeClass('forErr');
                            $('.formeserr').removeClass('formeserr')
                            $(".forcart").each(function(){

                                if($(this).val()==''){$(this).addClass('formeserr');}
                            });
                            if ($('.formeserr').length){
                                $("#promomesres").addClass('forErr')
                                $("#promomesres").html('Заполните все необходимые поля'); return;}
                            if($("#promocode").val()==''){	$("#promomesres").html('Поле промокод не может быть пустым'); return;}

                            strtosen=$(".forcart").serializeArray();
                            const queryString = window.location.search;


                            strtosen.push({ name: "queryString", value: queryString });
                            strtosen.push({ name: "curentprodid", value: $("#curentprodid").val() });
                            strtosen.push({ name: "promocode", value: $("#promocode").val() });

                            $.ajax({

                                url: '/orderm/payorderbypromo',
                                dataType: "json",
                                method: 'POST',

                                data:$.param(strtosen),

                                beforeSend: function() {
                                    window.inProgresm = true;

                                }

                            }).done(function(data){

                                window.inProgresm = false;

                                if(data.ID>1){
                                    $("#promomesres").html('Ваш заказ оплачен');
                                    BackLink='https://cent.kz/payrez/'+data.ID+'/'+data.subid;
                                    window.location.replace(BackLink);

                                    return;

                                }
                                else {
                                    $("#promomesres").addClass('forErr')
                                    if(data.error){$("#promomesres").html(data.error); return;}
                                    else {
                                        $("#promomesres").html('Произошла ошибка при формировании заказа'); return;}
                                }

                            }).fail(function() {
                                window.inProgresm = false;
                                $("#promomesres").addClass('forErr')
                                $("#promomesres").html('Произошла ошибка при формировании заказа'); return;
                                window.inProgresm = false;
                            });

                        }


                        function CreateOrder(){
                            if(window.inProgresm){return;}
                            $("#cartmesres").html('').removeClass('forErr');
                            $('.formeserr').removeClass('formeserr')
                            $(".forcart").each(function(){

                                if($(this).val()==''){$(this).addClass('formeserr');}
                            });
                            if ($('.formeserr').length){
                                $("#cartmesres").addClass('forErr')
                                $("#cartmesres").html('Заполните все необходимые поля'); return;}


                            strtosen=$(".forcart").serializeArray();
                            const queryString = window.location.search;


                            strtosen.push({ name: "queryString", value: queryString });
                            strtosen.push({ name: "curentprodid", value: $("#curentprodid").val() });

                            $.ajax({

                                url: '/orderm/createorder',
                                dataType: "json",
                                method: 'POST',

                                data:$.param(strtosen),

                                beforeSend: function() {
                                    window.inProgresm = true;

                                }

                            }).done(function(data){

                                window.inProgresm = false;

                                if(data.ID>1){
                                    $('#sendb').remove();

                                    $("#Signed_Order_B64").val(data.Signed_Order_B64);
                                    $("#appendix").val(data.appendix);
                                    $("#appendix").val(data.appendix);
                                    BackLink='https://cent.kz/payrez/'+data.ID+'/'+data.subid;
                                    $("#BackLink").val(BackLink);
                                    $("#FailureBackLink").val(BackLink);

                                    $("#Email").val($("#carteml").val());
                                    $("#gotoepay").click();

                                }
                                else {
                                    $("#cartmesres").addClass('forErr')
                                    $("#cartmesres").html('Произошла ошибка при формировании заказа'); return;
                                }

                            }).fail(function() {
                                window.inProgresm = false;
                                $("#cartmesres").addClass('forErr')
                                $("#cartmesres").html('Произошла ошибка при формировании заказа'); return;

                            });

                        }


                        function number_format( number, decimals, dec_point, thousands_sep ) {	// Format a number with grouped thousands
                            //
                            // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
                            // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                            // +	 bugfix by: Michael White (http://crestidg.com)

                            var i, j, kw, kd, km;

                            // input sanitation & defaults
                            if( isNaN(decimals = Math.abs(decimals)) ){
                                decimals = 2;
                            }
                            if( dec_point == undefined ){
                                dec_point = ",";
                            }
                            if( thousands_sep == undefined ){
                                thousands_sep = ".";
                            }

                            i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

                            if( (j = i.length) > 3 ){
                                j = j % 3;
                            } else{
                                j = 0;
                            }

                            km = (j ? i.substr(0, j) + thousands_sep : "");
                            kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
                            //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
                            kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


                            return km + kw + kd;
                        }

                        function intval( mixed_var, base ) {	// Get the integer value of a variable
                            //
                            // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

                            var tmp;

                            if( typeof( mixed_var ) == 'string' ){
                                tmp = parseInt(mixed_var);
                                if(isNaN(tmp)){
                                    return 0;
                                } else{
                                    return tmp.toString(base || 10);
                                }
                            } else if( typeof( mixed_var ) == 'number' ){
                                return Math.floor(mixed_var);
                            } else{
                                return 0;
                            }
                        }


                    </script>


                </div>

            </div>
        </div>




                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="asset{{'js/script.js'}}"></script>
                <script src="/fjs/jquery-3.3.1.min.js"></script>
                <script src="/fjs/jquery-migrate-3.0.1.min.js"></script>
                <script src="/fjs/jquery-ui.js"></script>
                <script src="/fjs/main.js?v=1"></script>

</body>
</html>

