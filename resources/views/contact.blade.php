@extends("main.main")

@section("content")


    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Связаться с нами</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Контакты</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 40px">
                <h6 class="section-title bg-white text-center text-primary px-3">Связаться с нами</h6>
                <h1 class="mb-5">Связаться С Нами Можно, Нужно И Важно!</h1>
                <p class="mb-4" style="text-align: center;">Наш офис находится в центре Самарканда, на оживленном участке современного города, в здании гостиницы Шарк.</p>
                <p class="mb-4" style="margin-top: -25px;text-align: center;">Мы будем рады встретить Вас у себя в офисе, угостить чаем или кофе с печенюшками, поговорить о Вашей поездке, предложить нечто большее, чем написано в путеводителях, оснастить Вас картой города и проводить на экскурсию.</p>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="margin-bottom: 20px">Связаться</h5>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Офис</h5>
                            <p class="mb-0">ул. Мирзо Улугбека, 150 (ориентир «Поворот») Офисы № 7 и №8 г. Самарканд</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Мобильный</h5>
                            <p class="mb-0">+998 906558088</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fab fa-brands fa-whatsapp fa-2x text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">WhatsApp</h5>
                            <p class="mb-0">+998 906558088</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d139070.13731181665!2d66.985138863105!3d39.626192613937135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d191960077df7%3A0x487636d9d13f2f57!2z0KHQsNC80LDRgNC60LDQvdC0!5e0!3m2!1sru!2s!4v1644490625700!5m2!1sru!2s"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="#" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Ваше имя</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Ваш e-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="tema" placeholder="Subject">
                                    <label for="subject">Тема</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="comment" style="height: 100px"></textarea>
                                    <label for="message">Сообщение</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection