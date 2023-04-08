@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Самарканд – Шахрисабз – Бухара</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Самарканд – Шахрисабз – Бухара</li>
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
                <h6>День 1 : Самарканд</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Прибытие в Самарканд 02:50, встреча в аэропорту, трансфер в отель, размещение в отеле, отдых</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10:30 — 13:30 – Обзорная экскурсия по городу</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Ак Сарай</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Гур Эмир</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Рухабад</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Площадь Регистан</p>
                </div>


                <h6> День 2 (пятница): Самарканд</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10.00- 14.00 продолжаем осматривать достопримечательности города Самарканд,</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обсерватория Улугбека</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей святого Даниила</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Музей Афросиаб</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мечеть Хазрати Хизр</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Некрополь</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Шахи Зинда</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выезд в кишлак Кони Гиль к единственной в Самарканде водяной мельнице.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Посещение мастерской по изготовлению бумаги ручным способом</p>
                </div>


                <h6>День 3 (суббота): Самарканд</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10.00 – экскурсионные достопримечательности за пределами Самарканда</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Комплекс ХоджаИмам аль Бухари</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Комплекс Ходжа Ахрор Вали</p>
                </div>


                <h6>День 4 (воскресенье): Самарканд-Шахрисабс – Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле. Переезд в Шахризабс (90 км, 1,5 часа). Экскурсия по Шахрисабсу</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Дворец Ак Сарай</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Джахонгра</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Комплекс Дарус Саодат с большой мечетью Кок Гумбаз и мавзолея Гумбази Саидон</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Переезд в Бухару, размещение в отеле, свободное время</p>
                </div>


                <h6>День 5 (понедельник ): Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10.00–экскурсия по Бухаре с осмотром основных достопримечательностей, объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Саманидов,</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Чашма Аюб</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мечеть Боло Хауз</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Крепость Арк</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>После обеда продолжение экскурсионной программы</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Посещение комплекса Пои Калян ( мечеть, минарет Калян и медресе Мири Араб)</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время. Ночь в Бухаре.</p>
                </div>


                <h6>День 6 (вторник): Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10.00-14.00  продолжение осмотра  загородных архитектурных ансамблей и памятников</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Экскурсия к загородной летней резиденции последнего бухарского Эмира и месту поклонения Бахаваддин Накшбанд ( основатель суфийского ордена Накшбандия)</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время, возможность отдохнуть или посетить базары Бухары</p>
                </div>


                <h6>День 7 (среда )</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>02.10 — трансфер в аэропорт, вылет на Родину</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($swb as $sw)
                        @if($loop->iteration == 2)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $sw->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $sw->title }}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $sw->date }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $sw->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route('addtocart',['id'=>$sw->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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