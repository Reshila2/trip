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
                <a class="logo" href="/index"><img src={{asset("/img/logo8.png")}}></a>
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
<section class="item-page">
    <div class="container">


        <div class="item-inside">
            <a href="javascript:void(0)" onclick="window.history.back()">Назад</a><br><br>
            <div class="item_top">
                <img src="{{ asset($post-> img) }}" alt="Товар" class="item-inside_img">
                <div class="item-inside_content">
                    <h1>{{ $post->title }}</h1>
                    <p> {{ $post->subtitle }}</p>
                    <p> {{ $post->text }}</p>
                    <div class="item-rating">
                        <input type="radio" id="star-5" name="rating" value="5">
                        <label for="star-5" title="Оценка «5»"><i class="icon-star"></i></label>
                        <input type="radio" id="star-4" name="rating" value="4">
                        <label for="star-4" title="Оценка «4»"><i class="icon-star"></i></label>
                        <input type="radio" id="star-3" name="rating" value="3">
                        <label for="star-3" title="Оценка «3»"><i class="icon-star"></i></label>
                        <input type="radio" id="star-2" name="rating" value="2">
                        <label for="star-2" title="Оценка «2»"><i class="icon-star"></i></label>
                        <input type="radio" id="star-1" name="rating" value="1">
                        <label for="star-1" title="Оценка «1»"><i class="icon-star"></i></label>
                    </div>
                    <div class="counts">
                        {{--                            <span class="count-minus"  onclick="minusCount()">-</span>--}}
                        {{--                            <span class="num-count" id="num-count" value="1" data-max="4" data-min="1"></span>--}}
                        {{--                            <span class="count-plus" onclick="addCount()">+</span>--}}
                        <span class="count-minus" onclick="minusCount()">-</span>
                        <input class="num-count" id="num-count" value="1" data-max="10" data-min="1">
                        {{--                            <span class="count-total"  value="1" data-max="10" data-min="1"></span>--}}
                        <span class="count-plus" onclick="addCount()">+</span>
                    </div>



                    <div class='item-buttons'>
                        <div class="add-favorite"><i class="icon-hearth-stroke"></i>
                            <p class='favorite-text'>Добавить в избранное</p>
                        </div>
                        <div class="add-basket"><i class="icon-basket"></i>
                            <p class='text-basket'>Добавить в корзину</p>
                        </div>
                    </div>
                    <h2 >Итого: <span class="price-value" id="priceValueCount" style="margin-top: 10px">{{ $post->price }} </span>  T</h2>
                    <div class="price-value"style="margin-bottom: 10px" id="priceValueCount"></div>
                    <a class="btn-order_inside"  href="{{ url('/order') }}">Заказать</a>

                </div>
            </div>

            </p>
            <div class="item-content_tabs">
                <div class="item-content_tab active">Описание</div>
                <div class="item-content_tab">Отзывы</div>
                <div class="item-content_tab">Вопросы и ответы</div>
            </div>
            <div class="item-content_tab-content">
                <p>{{ $post->productDescription }}.</p>
            </div>

        </div>
    </div>
</section>
@extends('layouts/footer')
@extends('layouts/form')
<script>

    var count = 1;
    var countprice = {{$post->price}};
    var countEl = document.getElementById("num-count");
    var priceEl = document.getElementById("priceValueCount");
    priceEl.innerHTML = countprice;

    function addCount() {
        if (count < 10) {
            count++;
            countEl.value = count;
            const a = countEl.value;
            const x = countprice * a;
            priceEl.innerHTML = x;
        }
    }

    function minusCount() {
        if (count > 1) {
            count--;
            countEl.value = count;
            const a = countEl.value;
            const x = countprice * a;
            document.getElementById("priceValueCount").innerHTML = x;
        }
    }



</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="asset('js/main.js')"></script>
<script>

</script>
</body>

</html>

