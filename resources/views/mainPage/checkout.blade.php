<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <li class="menu-item"><a href="{{route('mainPage.cart')}}">
                            <i class="icon-basket"></i>
                            <p style="margin-top: 10px">Корзина</p>
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ' '}}</span>
                        </a></li>
                    <li class="menu-item"><a href="#"><i class="icon-hearth"></i>
                            <p style="margin-top: 10px">Избранное</p>
                        </a></li>




                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth

                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('login') }}"
                                            >
                                                {{ __('Logout') }}
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('auth.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>

                <div class="row">
                    <div class="col-sm-6 coll-md-4 col-md-offset-4 col-sm-offset-3">
                        <h1>Checkout</h1>
                        <h4>Общая Сумма: ${{ total }}</h4>
                        <form action="{{ route('checkout') }}" method="post">

                        </form>
                    </div>
                </div>


@extends('layouts/footer')
@extends('layouts/form')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="asset{{'js/script.js'}}"></script>
<script src="/fjs/jquery-3.3.1.min.js"></script>
<script src="/fjs/jquery-migrate-3.0.1.min.js"></script>
<script src="/fjs/jquery-ui.js"></script>
<script src="/fjs/main.js?v=1"></script>

</body>
</html>
