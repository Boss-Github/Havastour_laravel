@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Бухара – Самарканд – Ташкент</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Бухара – Самарканд – Ташкент</li>
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
                <h6>День 1 (среда): Бухара</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>02:50  Прибытие в Бухару, встреча в аэропорту, трансфер в отель. Размещение. Отдых после перелета.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10:00-13:00 Экскурсия по  старому городу.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00- 18:00 Продолжение экскурсионной программы. Свободное время. Ночь в отеле.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Площадь Ляби Хауз:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Медресе Нодир Девон Беги</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ханака Нодир Девон Беги</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Самая старая мечеть Магокки ат Тори</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Крытые базары</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Тим Абдулла Хана</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Медресе Улугбека</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Медресе Абдул Азиза</p>
                </div>


                <h6>День2  (четверг): Бухара- Самарканд</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в гостинице.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10:30 — 13:00 — Продолжение экскурсии.  Поездка за пределы города: летняя резиденция эмира «Ситораи Мохи-Хоса» (XIX в.), древнее захоронение «Чор-Бакр» (X в), посещение мавзолея Бахоутдина Накшбанди (XVI-XIX вв.), могилы его матери и преемников (XIV в.).</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00 — 18:00 — Переезд в Самарканд (270 км, 4 часа). По приезду  размещение в отеле, свободное время Ночевка в городе, который является ровесником древнему Риму и имеет более чем 2500-летнюю историю.</p>
                </div>


                <h6>День3 (пятница): Самарканд-Ташкент</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в гостинице</p>
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
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>16:30 — Трансфер на ж/д вокзал для выезда в Ташкент на поезде «Регистан» в 17:00.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>20:50 — Прибытие в Ташкент. Размещение в гостинице.Ночь в Ташкенте.</p>
                </div>


                <h6>День 4 (суббота) Ташкент</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в гостинице.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10:30 — 13:30 — Обзорная экскурсия по Ташкенту, старая часть города.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Площадь Абул Касыма, Комплексм Хаст Имам, Базар Чор Су,Музей прикладного искусства, ознакомительная поездка на метро</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>14:30 — 16:00 — Экскурсия в музей прикладного искусства.</p>
                </div>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Свободное время,  трансфер в отель, размещение, трансфер в аэропорт,</p>
                </div>


                <h6>День 5(воскресенье)</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Трансфер в аэропорт. Вылет. Конец программы</p>
                </div>


                <div class="row g-4 justify-content-center">
                    @foreach($bst as $bs)
                        @if($loop->iteration == 3)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $bs->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $bs->title }}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $bs->date }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $bs->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$bs->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Читать Далее</a>
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