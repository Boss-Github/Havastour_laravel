@extends("main.main")

@section("content")

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Наслаждайтесь отдыхом с нами</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Вы делаете правильный выбор!</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/public/havastour/img/about.jpg" alt="" style="object-fit: cover; filter: contrast(150%); -webkit-filter: contrast(110%);">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">О нас</h6>
                <h1 class="mb-4">Добро Пожаловать На Нашу <span class="text-primary"><center>Страницу!</center></span></h1>
                <p class="mb-4">Сотни и сотни благодарных гостей, музыкантов, бизнесменов, студентов, спортсменов, фотографов, археологов, авантюристов, журналистов, мам, пап, их детей, бабушек и дедушек прокатились на верблюдах, осликах, роликах и велосипедах, проехали на мотоциклах, на своих машинах, пролетели на своих частных самолётах, самолётами узбекских авиалиний с нами по Великому Шёлковому пути.</p>
                <p class="mb-4">Мы Предлагаем Вам Разнообразные Варианты Туров:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Культурные</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Археологические</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Гостиничное размещение</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Экзотические</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Экстремальные</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Гастрономические</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route("about") }}">Читать далее</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Услуги</h6>
            <h1 class="mb-5">Наши услуги</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-address-card fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Бронирование авиабилетов</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-taxi fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Организация транспортных услуг</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-home fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Гостиничное размещение</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-credit-card fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Обеспечение визовой поддержки</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-coffee fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Организация питания</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-calendar fa-3x text-primary mb-4" aria-hidden="true"></i>
                        <h5>Планирование досуга</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="width: 647px">
                <div class="service-item rounded pt-3">
                    <div class="p-4" align="center">
                        <i class="fa fa-window-maximize fa-2x text-primary mb-4" aria-hidden="true"></i>
                        <h6>У нас вы можете забронировать целый тур пакет, или же исполнение отдельной его части.</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Destination Start -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Назначения</h6>
            <h1 class="mb-5">Популярное направление</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="{{ route("city_samarqand") }}">
                            <img class="img-fluid" src="/public/havastour/img/samarqand.jpg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Самарканд</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="{{ route("city_tashkent") }}">
                            <img class="img-fluid" src="/public/havastour/img/tashkent.jpg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Ташкент</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="{{ route("city_buxara") }}">
                            <img class="img-fluid" src="/public/havastour/img/buxara.jpg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Бухара</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="{{ route("city_xiva") }}">
                    <img class="img-fluid position-absolute w-100 h-100" src="/public/havastour/img/xiva.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Xива</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Destination Start -->


<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Туры</h6>
            <h1 class="mb-5">Отличные туры</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/navruz.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Самарканд</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>9 дней</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1 Человек</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Праздничный тур – Навруз</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/camel.jpeg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Тур На Верблюдах</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>4 дней</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1 Человек</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселая поездка на верблюде.</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/kumushkan.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ташкентская  Область</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>9 дней</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1 Человек</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Треккинг тур Кумышкан-Бельдерсай</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Package End -->


<!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h1 class="text-white mb-4">Связаться с нами можно, нужно и важно!</h1>
                    <p class="mb-4">Наш офис находится в центре Самарканда, на оживленном участке современного города, в здании гостиницы Шарк.</p>
                    <p class="mb-4">Мы будем рады встретить Вас у себя в офисе, угостить чаем или кофе с печенюшками, поговорить о Вашей поездке, предложить нечто большее, чем написано в путеводителях, оснастить Вас картой города и проводить на экскурсию.</p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="{{ route("contact") }}">Читать далее</a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Связаться с нами</h1>

                    <form action="#" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" name="name" placeholder="Your Name">
                                    <label for="name">Ваше имя (обязательно)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" name="email" placeholder="Your Email">
                                    <label for="email">Ваш e-mail (обязательно)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" name="tema" placeholder="Your Name">
                                    <label for="name">Тема</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" name="comment" style="height: 100px"></textarea>
                                    <label for="message">Сообщение</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Start -->


<!-- Process Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">ПРОЦЕСС</h6>
            <h1 class="mb-5">3 Простых Шага</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-globe fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Выберите пункт назначения</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Оплатить онлайн</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-plane fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Летайте сегодня</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Start -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">ПУТЕВОДИТЕЛЬ</h6>
            <h1 class="mb-5">Познакомьтесь с нами</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/4.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Файзуллаева Фарзуна</h5>
                        <details>
                            <summary class="voditel">Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Студентка Самаркандского института иностранных языков. Добрая и отзывчивая, легко располагает к себе людей. Владеет английским языком. Готова подобрать для вас подходящий тур, интересный и выгодный по цене. Самое главное для Фарзуны – организовать запоминающееся путешествие и обеспечить яркие впечатления. В свободное время занимается изучением китайского языка и чтением исторической литературы.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/3.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Исакова Алина</h5>
                        <details>
                            <summary class="ruko">Менеджер, Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Алина выпускница колледжа туризма. На данный момент студентка Самаркандского Государственного Университета. Владеет английским языком. В свободное время занимается изучением немецкого языка и чтением книг.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/2.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Аблаева Февзие</h5>
                        <details>
                            <summary class="ruko1">Гид С Немецким Языком, Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Закончила Институт иностранных языков. Основным иностранным языком  является немецкий. Февзие сопровождает группы по маршрутам, проходящим в Узбекистане. Хорошо знает историю, легенды, обычаи и кухню узбекского народа. Всегда интересно проводит туристам экскурсии. Каждая группа, с которой она работала,  уезжала с незабываемыми впечатлениями и самыми лучшими фотографиями. Февзие неоднократно была в Германии, где пополняла свои знания  в сфере ведения и обслуживания туристических групп. Владеет сертификатом международного образца. Очень ответственна, хорошо знает свое дело и в свободное время работает над собой.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/1.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Джуманиязов Махсуд</h5>
                        <details>
                            <summary class="ruko">Гид С Немецким Языком</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Закончил Самаркандский институт иностранных языков. Общительный и открытый человек. Махсуд приятный собеседник с хорошим чувством юмора. Владеет обширными знаниями в области истории и имеет широкий кругозор. Мечтает совершить кругосветное путешествие.</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<style>
    .voditel{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 120px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .ruko{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 200px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .ruko1{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 230px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .text{
        margin-top: 10px;
    }

</style>




@endsection
