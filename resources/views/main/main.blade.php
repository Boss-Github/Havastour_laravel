<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Havas Tour Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/havastour/img/icon.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/public/havastour/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/public/havastour/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/public/havastour/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/public/havastour/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/public/havastour/css/style.css" rel="stylesheet">

</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>7, Radjab Zade str. Samarkand 140130 Uzbekistan</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+998 906558088</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="/public/havastour/img/Havas-logo-1.png">
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">

                <a href="{{ route("index") }}" class="nav-item nav-link">Главная</a>
                <a href="{{ route("about") }}" class="nav-item nav-link">О нас</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Туры</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route("tour") }}" class="dropdown-item">Заказать тур в Узбекистан</a>
                        <a href="{{ route("txbs") }}" class="dropdown-item">Ташкент – Хива – Бухара – Самарканд</a>
                        <a href="{{ route("swb") }}" class="dropdown-item">Самарканд – Шахрисабз – Бухара</a>
                        <a href="{{ route("bst") }}" class="dropdown-item">Бухара – Самарканд – Ташкент</a>
                        <a href="{{ route("navruz") }}" class="dropdown-item">Праздничный тур – Навруз</a>
                        <a href="{{ route("kumushkon") }}" class="dropdown-item">Треккинг тур Кумышкан-Бельдерсай</a>
                        <a href="{{ route("tour_remes") }}" class="dropdown-item">Тур в ремесленные мастерские</a>
                        <a href="{{ route("tour_gurman") }}" class="dropdown-item">Тур для гурманов (Гурмэ)</a>
                        <a href="{{ route("tour_camel") }}" class="dropdown-item">Тур на верблюдах</a>
                        <a href="{{ route("tour_palomnik") }}" class="dropdown-item">Туры для паломников</a>
                        <a href="{{ route("tour_for") }}" class="dropdown-item">Туры для людей с ограниченными физическими возможностями</a>
                        <a href="{{ route("tour_school") }}" class="dropdown-item">Туры для школьников</a>
                        <a href="{{ route("tour_health") }}" class="dropdown-item">Оздоровительные туры</a>
                        <a href="{{ route("tour_family") }}" class="dropdown-item">Тур для семьи с детьми</a>
                        <a href="{{ route("tour_horse") }}" class="dropdown-item">Конный тур в Бельдерсай</a>
                        <a href="{{ route("tour_bus") }}" class="dropdown-item">Ташкент – Экскурсия на Даблдекере</a>
                        <a href="{{ route("tour_samarqand") }}" class="dropdown-item">Самарканд – От рассвета до заката</a>
                        <a href="{{ route("tour_buxara") }}" class="dropdown-item">Бухара – В городе крылатого верблюда</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Отели</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route("tashkent") }}" class="dropdown-item">Ташкент</a>
                        <a href="{{ route("samarqand") }}" class="dropdown-item">Самарканд</a>
                        <a href="{{ route("shaxrisabz") }}" class="dropdown-item">Шахрисабз</a>
                        <a href="{{ route("buxara") }}" class="dropdown-item">Бухара</a>
                        <a href="{{ route("xiva") }}" class="dropdown-item">Хива</a>
                        <a href="{{ route("urgench") }}" class="dropdown-item">Ургенч</a>
                        <a href="{{ route("nukus") }}" class="dropdown-item">Нукус</a>
                        <a href="{{ route("termez") }}" class="dropdown-item">Термез</a>
                        <a href="{{ route("andijan") }}" class="dropdown-item">Андижан</a>
                        <a href="{{ route("qoqand") }}" class="dropdown-item">Коканд</a>
                        <a href="{{ route("fergana") }}" class="dropdown-item">Фергана</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Города</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route("city_tashkent") }}" class="dropdown-item">Ташкент</a>
                        <a href="{{ route("city_samarqand") }}" class="dropdown-item">Самарканд</a>
                        <a href="{{ route("city_shaxrisabz") }}" class="dropdown-item">Шахрисабз</a>
                        <a href="{{ route("city_nurata") }}" class="dropdown-item">Нурата</a>
                        <a href="{{ route("city_buxara") }}" class="dropdown-item">Бухара</a>
                        <a href="{{ route("city_xiva") }}" class="dropdown-item">Хива</a>
                        <a href="{{ route("city_toprak") }}" class="dropdown-item">Крепости Топрак и Аяз Кала</a>
                        <a href="{{ route("city_nukus") }}" class="dropdown-item">Нукус</a>
                        <a href="{{ route("city_termez") }}" class="dropdown-item">Термез</a>
                        <a href="{{ route("city_fergana") }}" class="dropdown-item">Ферганская долина</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Путеводитель</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route("uzbekistan") }}" class="dropdown-item">Всё об Узбекистане</a>
                        <a href="{{ route("story_uzb") }}" class="dropdown-item">Краткая история Узбекистана</a>
                        <a href="{{ route("greate_path") }}" class="dropdown-item">Великий шелковый путь</a>
                        <a href="{{ route("uzbek_cuisine") }}" class="dropdown-item">Узбекская кухня</a>
                        <a href="{{ route("craft") }}" class="dropdown-item">Искусство и ремесло</a>
                        <a href="{{ route("tradition") }}" class="dropdown-item">Узбекские обычаи и традиции</a>
                        <a href="{{ route("uzbek_clothes") }}" class="dropdown-item">Узбекская национальная одежда</a>
                        <a href="{{ route("holiday") }}" class="dropdown-item">Праздники Узбекистана</a>
                    </div>
                </div>
                <a href="{{ route("faq") }}" class="nav-item nav-link">FAQ</a>
                <a href="{{ route("contact") }}" class="nav-item nav-link">Контакты</a>
                <a href="{{ route("cart") }}" class="nav-item nav-link">Корзина @if(count(Cart::content())) ({{ Cart::content()->count() }}) @endif </a>
            </div>

        </div>
    </nav>


<!-- Content -->
        @yield("content")
<!-- Content End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Компания</h4>
                <a class="btn btn-link" href="{{ route("about") }}">О нас</a>
                <a class="btn btn-link" href="{{ route("contact") }}">Контакты</a>
                <a class="btn btn-link" href="{{ route("tour") }}">Туры</a>
                <a class="btn btn-link" href="{{ route("faq") }}">FAQ</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Контакт</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>7, Radjab Zade str. Samarkand 140130 Uzbekistan</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+998 906558088</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-brands fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-brands fa-telegram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fas fa-solid fa-fax"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Галерея</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="/public/havastour/img/img6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="">
                    <a href="{{ route("index") }}" style="float: left"><img src="/public/havastour/img/Havas-logo-1.png"></a>
                   <p style="position: relative; top: 20px">Все права защищены. Пожалуйста, свяжитесь с нами для получения разрешения на копирование, распространение или перепечатку материалов</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/havastour/lib/wow/wow.min.js"></script>
<script src="/public/havastour/lib/easing/easing.min.js"></script>
<script src="/public/havastour/lib/waypoints/waypoints.min.js"></script>
<script src="/public/havastour/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/public/havastour/lib/tempusdominus/js/moment.min.js"></script>
<script src="/public/havastour/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/public/havastour/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="/public/havastour/js/main.js"></script>

</body>

</html>