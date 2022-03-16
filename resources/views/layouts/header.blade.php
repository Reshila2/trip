<section class="header">


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

            </div> <br><div class="banner-slider">
                <a href="/8march"><img src="/img/banner8__.png" alt="" style="border-radius:15px;" id="banner_1"></a>
                <a href="/"><img src="/img/banner82.png" alt="" style="border-radius:15px;" id="banner_2"></a>
            </div>


            <div class="menu-bottom">

                <ul class="bottom-menu">

                    <li class="bottom-menu_item catlink active" > <a href={{url('/index')}}  class='active'>Все</a></li>
                    @foreach ($categories as $category)
                        <li class="bottom-menu_item catlink "><a href="{{ url('/category',$category->id) }}">{{ $category['title'] }}</a></li>
                    @endforeach
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
</section>
