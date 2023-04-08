@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Тур для гурманов (Гурмэ)</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Тур для гурманов (Гурмэ)</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1ыs" style="flex: 0 0 auto; width: 100%;">
                <h6 style="margin-bottom: 20px;">ВКУСНЫЙ УЗБЕКИСТАН – GOURMET TOUR ОТ ПРОФЕССИОНАЛОВ</h6>
                <h6>День 1 - Вылет в Ташкент рейсом</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Вечернее прибытие в Ташкент гостей в Ташкент. Трансфер в отель. Размещение</p>
                </div>

                <h6>День 2 - Вкусный Ташкент</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>09-30 — Поздний завтрак</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10-00-13-00 Экскурсия по городу: Площадь Хаст Имам, Базар Чор Су</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>13-00-14-30 —  обед в Центре Плова</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>15-00-17-00 продолжение экскурсии в Ташкенте  -Музей прикладного искусства, театральная площадь. Алайский базар</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>19-00- 21-00 Ужин в ресторане, а так же мастер-класс от шеф-повара.</p>
                </div>
                <h6>День 3 - Вкусный Самарканд</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>06-40 - Завтрак в гостинице.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>07-00 Трансфер на вокзал.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>08-00 Отбытие скорого поезда в Самарканд</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10-30 Трансфер в гостиницу. Размещение в отеле</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>11-30 – 13-00 Экскурсионная программа:Посещение Ансамбля Регистан.  Сиабский базар</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>13-14-30 Обед в самаркандской чайхане.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>15-00 – 17-30 продолжение экскурсионной программы – Некрополь Шахи Зинда, мечеть</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Биби Ханум, Базар. Дегустация на винзаводе им. Ховренко.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>19-00-21-00 Ужин ( мастер класс — Барра Кабоб с Нохатом)</p>
                </div>
                <h6>День 4 - Вкусная Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>08-00- 09-00 Завтрак + мастер класс по Ширгуруч .</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Переезд в Бухару. По дороге посещение частной мастерской в Гиждуване.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>13-30-14-30 Обед у мастера</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Шашлыки по-гиждувански. По прибытию в Бухару</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Размещение в отеле. Свободное время  на площади  Ляби Хауз.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>19-00-21-00 Ужин по-хански (в медресе 17  века Нодир Девон Беги + концертная программа)</p>
                </div>
                <h6>День 5 - Вкусная Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>09-00 Завтрак.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Продолжение экскурсии: ансамбль Поли-Калон, включая минарет (12 века), мечеть (15 века), действующее медресе Мири-Араб (16 века), медресе Эмира Алим-Хана (14 века), Токи (дома ремесленников), медресе Кукельдаш (16 века)</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>13-00-14-30 Обед +мастер класс Бухарский плов</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завершение экскурсия по Бухаре: Ляби-Хауз (17 век), Нодир Диван Беги (17 век), Магоки Аттари (16 век), медресе Улугбека (15 век), медресе Абдул Азиза (17 века), Чор Минор</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>19:00-22:00 Ужин в ресторане Олд Бухара + дегустация местных вин</p>
                </div>
                <h6>День 6 - Вкусный Хорезм</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>07-30 Завтрак.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>08-30 Переезд в Ургенч (Хиву) (470 км).</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>13-00 Пикник по дороге</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>16-00 Размещение в гостинице</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>19-21-00 Ужин в семье (мастер класс по приготовлению Шивит Оши и Тухум Барак – ханская кухня)</p>
                </div>
                <h6>День 7 - Вкусная Хива</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Утренняя экскурсия по Хиве: Визит самой старой части города: крепость Куня-Арк, включая Куриниш Хана (17 века); Медресе Мухаммед-Амин-Хана (19 века), минарет Ислам Ходжа; комплекс Палван-Кари, коплекс Абд-Аль Бобо (18 века), медресе Рафанека, Мухаммеда Рахим Хана  (19 века), медресе Амир-Тура, мавзолей Шох-и-Каландар Бобо.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед  — Рыба Амударьинская в ассортименте.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Секреты приготовления рыбы по Хорезмийским рецептам</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Продолжение экскурсии после обеда: Уч Авлиоли («три святых») мавзолей, пятничная мечеть (18 века), медресе Кутлуг-Мурад Инак(19 века), мавзолей Пахлаван Махмуда, дворец Тош Ховли, Алла-КулиХан(18 век), медресе Араб Мухаммед Хана (18 века).</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин в местном ресторане</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Трансфер в аэропорт к вылету самолета в Ташкент</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Прибытие в Ташкент. Трансфер в гостиницу. Размещение в отеле. Так же вылет может быть запланирован в Москву и Санкт Петербург.</p>
                </div>
                <h6>День 8 - Ташкент</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>06-30 Ранний завтрак.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>07-00-трансфер в а/порт</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>09-25 вылет рейса.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_gurman as $gurman)
                        @if($loop->iteration == 7)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $gurman->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $gurman->title }}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $gurman->date }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $gurman->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$gurman->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                        @endforeach
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- About End -->



@endsection