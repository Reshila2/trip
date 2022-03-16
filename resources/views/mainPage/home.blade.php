<!-- header section starts -->


{{--            --}}{{----}}{{--            <a href="#collections">Collections</a>--}}
{{--            --}}{{----}}{{--            <a href="#featured">Featured</a>--}}
{{--            --}}{{----}}{{--            <a href="#faq">FAQ</a>--}}

{{--            <a href="" onclick="changeLang()">Qaz</a>--}}
{{--            <div class="btn bg-purple wallet">Корзина</div>--}}
{{--            <div class="vl"></div>--}}
{{--            <div class="login" href="">--}}
{{--                @guest--}}
{{--                    <li><a href="{{ route('login') }}">Login</a></li>--}}
{{--                    <li><a href="{{ route('register') }}">Register</a></li>--}}
{{--                @else--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle dropbtn "onclick="Login()" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                            <div id="myDropdown" class="dropdown-content">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--       document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}

{{--                            </div>--}}


{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="fas fa-wallet" id="wallet"></div>--}}
{{--        <div class="fas fa-bars" id="bar"></div>--}}
{{--    </div>--}}
{{--</header>--}}
{{--<!-- header section ends -->--}}

{{--<!-- home section starts -->--}}
<section id="about" class="spacer10">
    <div class="container">
        <h1 class="bold size4 ta-center">О нас</h1>
        <p class="spacebottom3 halfwhite size2 ta-center">
            Cent.kz - с заботой о вас и ваших близких!

        </p>
        <div class="row ai-center jc-between flexcol-s">
            <div class="col5 col10-s spacebottom2-s">
                <img src="img/about.png" class="img-responsive" alt="">
            </div>
            <div class="col6 col12-s ta-center-s">
                <h3 class="size3 bold">Платформа для покупок и продаж.</h3>
                <p class="size2 spacetop1 spacebottom3 halfwhite">Мы разработали проект Cent.kz для того, чтобы вы могли позаботиться о своих родных. Здесь вы найдете продукты и сервисы для самых важных людей для вас и для всех сфер их жизни..
                </p>
                <a href="#collections" class="btn bg-purple size2 white">Подробнее</a>
            </div>
        </div>

    </div>
</section>
{{--<!-- about section ends -->--}}

<section class="collections spacer10" id="collections">
    <div class="container">
        <h1 class="bold size4 ta-center">Может вам понравиться.</h1>
        {{--            @foreach ($categories as $category)--}}
        {{--        <p class="spacebottom3 halfwhite size2 ta-center">--}}
        {{--               }--}}
        {{--        </p>--}}
        {{--            @endforeach--}}
        <div class="row spacebottom3 filter-buttons">
            <div class="col2 filter col4-xs spacebottom1-xs" data-filter="art">
               z
            </div>
            @foreach ($categories as $category)
                <div class="col2 filter col4-xs" data-filter="photograpy">
                    <a href="{{ url('/category',$category->id) }}">{{ $category['title'] }}</a>
                </div>
            @endforeach
        </div>

        {{--            --}}{{----}}{{--            <div class="col2 filter col4-xs" data-filter="pattern">Дом</div>--}}
        {{--            --}}{{----}}{{--            <div class="col2 filter col4-xs" data-filter="pattern">Туризм</div>--}}
        {{--            --}}{{----}}{{--            <div class="col2 filter col4-xs" data-filter="pattern">Разное</div>--}}

    </div>
    <div class="row box-card jc-evenly-md">
        @foreach($posts as $post)
            <div class="col4 card collect bg-white10 col5-md col6-s" data-item="art">
                <h1 class="size2 halfwhite">
                    {{ $post['title'] }}
                </h1>
                <img src="{{ $post['img'] }}" class="img-responsive" alt="">
                <div class="row jc-between spacetop2">
                    <div>
                        <h3 class=" bold"> {{ $post['subtitle'] }}</h3>
                    </div>
                    {{--                        --}}{{----}}{{--                        <div><p class="current halfwhite"></p>--}}
                    {{--                        --}}{{----}}{{--                            <h5 class="size2 bold">  Стоимость {{ $post['price'] }} T</h5>--}}
                    {{--                        --}}{{----}}{{--                        </div>--}}
                </div>

                <a class="bid size2 ta-center" href = "{{ url('/show',$post->id) }}">
                    Подробнее
                </a>
            </div>
        @endforeach

        {{--        </div>--}}
    </div>
</section>


{{--<!-- creator section starts -->--}}
{{--<section class="creator spacer10" id="featured">--}}
{{--    <div class="container">--}}
{{--        <h1 class="bold size4 ta-center">Отзывы от наших клиенто</h1>--}}
{{--        <p class="spacebottom3 halfwhite size2 ta-center">--}}
{{--            --}}{{----}}{{--            Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit.--}}
{{--        </p>--}}
{{--        <div class="swiper row creator-slider">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <div class="col4 col5-md col7-s swiper-slide">--}}
{{--                    <div class="card-creator bg-white10 ta-center">--}}
{{--                        <img src="img/creator1.png" class="img-responsive" alt="">--}}
{{--                        <img src="img/photo1.png" class="photo" alt="">--}}
{{--                        <h5 class="spacer1 size2 bold">John Wick</h5>--}}
{{--                        <p class="spacebottom2 halfwhite desc">Lorem ipsum dolor sit amet,--}}
{{--                            consectetur<br>adipiscing--}}
{{--                            elit.</p>--}}
{{--                        <!-- <button class="follow ta-center bg-purple white">+ Follow</button> -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col4 col5-md col7-s swiper-slide">--}}
{{--                    <div class="card-creator bg-white10 ta-center">--}}
{{--                        <img src="img/creator2.png" class="img-responsive" alt="">--}}
{{--                        <img src="img/photo2.png" class="photo" alt="">--}}
{{--                        <h5 class="spacer1 size2 bold">John Wick</h5>--}}
{{--                        <p class="spacebottom2 halfwhite desc">Lorem ipsum dolor sit amet,--}}
{{--                            consectetur<br>adipiscing--}}
{{--                            elit.</p>--}}
{{--                        <!-- <button class="follow ta-center bg-purple white">+ Follow</button> -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col4 col5-md col7-s swiper-slide">--}}
{{--                    <div class="card-creator bg-white10 ta-center">--}}
{{--                        <img src="img/creator3.png" class="img-responsive" alt="">--}}
{{--                        <img src="img/photo3.png" class="photo" alt="">--}}
{{--                        <h5 class="spacer1 size2 bold">John Wick</h5>--}}
{{--                        <p class="spacebottom2 halfwhite desc">Lorem ipsum dolor sit amet,--}}
{{--                            consectetur<br>adipiscing--}}
{{--                            elit.</p>--}}
{{--                        <!-- <button class="follow ta-center bg-purple white">+ Follow</button> -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- creator section ends -->--}}

{{--<!-- FAQ section starts -->--}}
{{--<section class="spacer10" id="faq">--}}
{{--    <div class="container">--}}
{{--        <h1 class="bold size4 ta-center">Часто задаваемы вопроы<br></h1>--}}
{{--        <p class="spacebottom3 halfwhite size2 ta-center">--}}
{{--            Хотите что-нибудь спросить?--}}
{{--        </p>--}}
{{--        <div class="row jc-between">--}}
{{--            <div class="box-faq col6 col12-s">--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">Где я могу потратить полученные бонусы?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">Вы можете оплатить ими следующую покупку.</p>--}}
{{--                </div>--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">В каких городах вы представляете?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">В Алмате и Астнане.</p>--}}
{{--                </div>--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">Какие услуги предоставляет ваша платформа?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">На нашем сайе вы смодете покупать автоиобильные товары и тд.</p>--}}
{{--                </div>--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">Где я могу потратить полученные бонусы?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">Вы можете оплатить ими следующую покупку.</p>--}}
{{--                </div>--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">В каких городах вы представляете?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">В Алмате и Астнане.</p>--}}
{{--                </div>--}}
{{--                <div class="box spacebottom5">--}}
{{--                    <div class="title row jc-between">--}}
{{--                        <h3 class="size2 halfwhite">Какие услуги предоставляет ваша платформа?</h3>--}}
{{--                        <i class="fas fa-angle-down size2 halfwhite"></i>--}}
{{--                    </div>--}}
{{--                    <p class="answer size2 spacetop1 ">На нашем сайе вы смодете покупать автоиобильные товары и тд.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box-faq col6 col12-s">--}}
{{--                <form action="/create" method="POST">--}}
{{--                    @csrf--}}
{{--                    --}}{{----}}{{--                    <label for="fname">В</label>--}}
{{--                    <input type="text" id="fname" name="firstname" placeholder="Имя..">--}}

{{--                    --}}{{----}}{{--                    <label for="lname">Last Name</label>--}}
{{--                    <input type="text" id="lname" name="lastname" placeholder="Фамилия..">--}}

{{--                    <input type="text" id="lname" name="email" placeholder="Email..">--}}
{{--                    <input type="text" id="lname" name="phone" placeholder="Номер телефона..">--}}

{{--                    --}}{{----}}{{--                    <select id="country" name="country">--}}
{{--                    --}}{{----}}{{--                        <option value="australia">Australia</option>--}}
{{--                    --}}{{----}}{{--                        <option value="canada">Canada</option>--}}
{{--                    --}}{{----}}{{--                        <option value="usa">USA</option>--}}
{{--                    --}}{{----}}{{--                    </select>--}}

{{--                    --}}{{----}}{{--                    <label for="subject">Subject</label>--}}
{{--                    <textarea id="subject" name="feedbackk" placeholder="О чем вы хотите нам сообщить.." style="height:200px"></textarea>--}}

{{--                    <input type="submit" value="Submit">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- FAQ section ends -->--}}


{{--<!-- footer section starts -->--}}
{{--<footer class="spacer10">--}}
{{--    <div class="container row jc-between flexcol-s ta-center-s">--}}
{{--        <div class="row flexcol spacebottom3-s">--}}
{{--            --}}{{----}}{{--            <a href="#" class="logo lightblue">Cent<span class="logoblack">.</span><span class="lightpurple">kz</span></a>--}}

{{--            <a href="#home" class="size2 bold lightblue">Cent<span class="logoblack">.</span><span class="lightpurple">kz</span></a>--}}
{{--            <p class="size2 halfwhite spacetop2">Самое главное для человека – это  <br>благополучие его близких! Мы <br> разработалипроект Cent.kz  для того,<br>    чтобы вы могли позаботиться о своих <br>родных. Здесь вы найдете продукты и <br>сервисы для самых важных людей для<br> вас и для всех сфер их жизни.</p>--}}
{{--        </div>--}}

{{--        <div class="row flexcol spacebottom3-s">--}}
{{--            <h5 class="bold size2">Контакты</h5>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">+7-777-777-77-77</a>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">centkz@kommesk.com</a>--}}
{{--            <div class="row jc-between spacetop2 jc-evenly-s">--}}
{{--                <a href="#" class="fab fa-youtube size2 halfwhite spacetop2"></a>--}}
{{--                <a href="#" class="fab fa-telegram size2 halfwhite spacetop2"></a>--}}
{{--                <a href="#" class="fab fa-facebook size2 halfwhite spacetop2"></a>--}}
{{--                <a href="#" class="fab fa-discord size2 halfwhite spacetop2"></a>--}}
{{--                <a href="#" class="fab fa-instagram size2 halfwhite spacetop2"></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row flexcol spacebottom3-s">--}}
{{--            <a href="#" class="bold size2 white">О компании</a>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">Наша команда</a>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">Наши партнеры</a>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">Privacy & Policy</a>--}}
{{--            <a href="#" class="size2 halfwhite spacetop2">Features</a>--}}
{{--        </div>--}}
{{--        <div class="row flexcol spacebottom3-s">--}}
{{--            <a href="#about" class="bold size2 white">Подпишитесь</a>--}}
{{--            <p  href="#" class="size2 halfwhite spacetop2">Узнавайте о новых акциях<br> и предложениях</p>--}}
{{--            <div class="content">--}}
{{--                <form class="subscription">--}}
{{--                    <input class="add-email" type="email" placeholder="subscribe@me.now">--}}
{{--                    <button class="submit-email" type="button">--}}
{{--                        <span class="before-submit">Subscribe</span>--}}
{{--                        <span class="after-submit">Thank you for subscribing!</span>--}}
{{--                    </button>--}}
{{--                </form>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--</footer>--}}
{{--<!-- footer section ends -->--}}

{{--<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>--}}
{{--<!-- custom js file link -->--}}
{{--<script src="js/script.js"></script>--}}

{{--<script src="{{ asset('js/mainPage/script.js') }}"></script>--}}
{{--<script src="{{ asset('js/mainPage/main.js') }}"></script>--}}

</body>

{{--</html>--}}
