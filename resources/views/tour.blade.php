@extends("main.main")

@section("content")

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Туры</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Туры</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Туры</h6>
            <h1 class="mb-5">Потрясающие Туры</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/samarqand.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ташкент - Хива - Бухара - Самарканд</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>8 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Увлекательное путешествие по регионам</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("txbs") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/buxara2.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Самарканд - Шахрисабз - Бухара</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>6 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Увлекательное путешествие по регионам</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("swb") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/tashkent2.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Бухара - Самарканд - Ташкент</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>5 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Увлекательное путешествие по регионам</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("bst") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/navruz.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Праздничный тур - Навруз</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>9 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселое и захватывающее путешествие</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("navruz") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/kumushkan.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Треккинг тур Кумышкан-Бельдерсай</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>9 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Экзотические тур</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("kumushkon") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/remeslen.jpeg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Тур в ремесленные мастерские</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Cекретный тур</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("tour_remes") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/gurman.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Тур для гурманов (Гурмэ)</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>8 дней</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселое и захватывающее путешествие</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("tour_gurman") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
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
                            <a href="{{ route("tour_camel") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/palomnik.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Туры для паломников</small>
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
                            <a href="{{ route("tour_palomnik") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/ogran.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Туры для людей с ограниченными физическими возможностями</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселое и захватывающее путешествие</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("tour_for") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/school.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Туры для школьников</small>
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
                            <a href="{{ route("tour_school") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/health.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Оздоровительные туры</small>
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
                            <a href="{{ route("tour_health") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/family.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Тур для семьи с детьми</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселое и захватывающее путешествие</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("tour_family") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/horse.jpeg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Конный тур в Бельдерсай</small>
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
                            <a href="{{ route("tour_horse") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/bus.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Ташкент - Экскурсия на Даблдекере</small>
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
                            <a href="{{ route("tour_bus") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/samarqand2.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Самарканд - От рассвета до заката</small>
                    </div>
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>Веселое и захватывающее путешествие</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route("tour_samarqand") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/buxara3.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Бухара - В городе крылатого верблюда</small>
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
                            <a href="{{ route("tour_buxara") }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/mayskiy.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Сборный тур в Узбекистан на майские праздники 2022</small>
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
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Ваше имя (обязательно)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Ваш e-mail (обязательно)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Тема</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
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

@endsection