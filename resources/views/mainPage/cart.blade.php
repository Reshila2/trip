<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Cent.kz </title>
    <meta name="description" content="Описание страницы">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <a class="logo" href="{{url('/index')}}"><img src={{asset('/img/logo8.png')}}></a>
                <ul class="menu" style="display:none;">
                    <li class="menu-item"><a href="#"><i class="icon-basket"></i>
                            <p>Корзина</p>
                        </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-hearth"></i>
                            <p>Избранное</p>
                        </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-user"></i>
                            <p>Личный кабинет</p>
                        </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-settings"></i>
                            <p>Настройки</p>
                        </a></li>
                </ul>
            </div>
            <div class="menu-bottom">

                <ul class="bottom-menu">

                </ul>
                <div class="header-search" style="display:none;">
                    <input required="" min="1" type="text" class="search-input" id="search" name="search">
                    <label><i class="icon-search"></i>Поиск...</label>
                    <button type="submit" class="search-btn">Найти</button>
                </div>
            </div>
            <div class="burger-content" style="display:none;">
                <div class="close-burger">×</div>
                <ul>
                    <li><a href="#">Меню 1</a></li>
                    <li><a href="#">Меню 2</a></li>
                    <li><a href="#">Меню 3</a></li>
                    <li><a href="#">Меню 4</a></li>
                    <li><a href="#">Меню 5</a></li>
                    <li><a href="#">Помощь</a></li>
                    <li><a href="#">Обратная связь</a></li>
                </ul>
            </div>
        </header>
    </div>
</div>

<div class="basket-page">
    <div class="container">

        <a href="javascript:void(0)" onclick="window.history.back()">Назад</a>
        <br>
        <br>
        <br>

        <h1>Корзина</h1>
        @if(Session::has('cart'))
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        @foreach($posts as $post)
                        <li class="list-group-item>">

                            <span>Вы выбрали продукт:<b>{{ $post['item']['title'] }} </b>в количестве <strong class="badge">{{ $post['qty'] }}</strong> шт. Стоимостью:<b> {{ $post['price'] }}</b>  </span>

                                <span class="label" label-success></b> </span>
                            <br>
                            <br>

{{--                            <div class="dropdown">--}}
{{--                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Acdftion--}}
{{--                                    <span class="caret"></span></button>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="#">Reduce by 1</a></li>--}}
{{--                                    <li><a href="#">Reduce All</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                   <strong>Total: {{$totalPrice}}</strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  <button type="button" class="btn btn-success">Checkout</button>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No Item in Cart</h2>
                </div>
            </div>
        @endif

    </div>
</div>
{{--        <div class="basket_items">--}}
{{--            <div class="basket_item">--}}
{{--                <img src="{{ asset($post-> img) }}">--}}
{{--                <div class="basket_info">--}}
{{--                    <h2>  Вы выбрали продукт: <b><a href="{{ url('/show',$post->id) }}" target="_blank"> {{ $post['title'] }}</a></b> стоимостью  {{ $post['price'] }} тг.  </h2>--}}
{{--                    <p>{{ $post['subtitle'] }}.</p>--}}
{{--                    <input  value="1" data-max="10" data-min="1">--}}
{{--                    <h2>Итого: <p class="num-count" id="num-count"></p> тг.</h2>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div class="feedback-form">--}}



{{--                <div class="feedback-form_item cart_item">--}}
{{--                    <form action="{{ url('/cart/'.$post->id) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <input type="text" id="cartenam" name="name">--}}
{{--                        <input type="text" id="cartsur" name="name" placeholder="Имя" class="form-control rounded-0 forcart">--}}
{{--                        <input type="text" id="carteml" name="email" placeholder="Е-mail" class="form-control rounded-0 forcart">--}}
{{--                        <input type="text" id="cartphn" name="phone" placeholder="Телефон" class="form-control rounded-0 forcart">--}}
{{--                        <button type="submit" class="btn btn-black rounded-0 py-2 px-2">Заказать</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <br><br>--}}
{{--            </div>--}}
{{--        </div>--}}




{{--                <div class="col-md-12">--}}
{{--                    <a href="javascript:void(0);" class="btn btn-black rounded-0 py-2 px-2" onclick="PayOrder()" style="cursor:pointer;">Заказать</a>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 forErr" id="cartmesres">Заполните все необходимые поля</div>--}}
{{--                <form action="https://epay.kkb.kz/jsp/process/logon.jsp" method="post" style="display:none">--}}
{{--                    <input type="hidden" name="Signed_Order_B64" id="Signed_Order_B64" value="">--}}
{{--                    <input type="hidden" id="Email" name="Email" value="">--}}
{{--                    <input type="hidden" name="Language" value="rus">--}}
{{--                    <input type="hidden" name="BackLink" id="BackLink" value="https://cent.kz/">--}}
{{--                    <input type="hidden" name="FailureBackLink" id="FailureBackLink" value="https://cent.kz/">--}}
{{--                    <input type="hidden" name="PostLink" value="https://cent.kz/response.php">--}}
{{--                    <input type="hidden" name="appendix" id="appendix" value="">--}}

{{--                    <button class="button button--prime" data-behavior="analytics" data-analytics-action="pay_kkb" id="gotoepay">Оплатить</button>--}}
{{--                </form>--}}


</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="asset('js/main.js')"></script>
<script>
