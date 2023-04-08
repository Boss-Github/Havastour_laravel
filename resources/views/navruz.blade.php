@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Праздничный тур – Навруз</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Праздничный тур – Навруз</li>
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
                <h6>Навруз</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Навруз — день весеннего равноденствия, самый радостный, светлый и красивый праздник не только в Узбекистане, но и во всей Средней Азии. С древних времен среди самых счастливых событий в жизни людей был приход весны. Навруз в переводе с фарси обозначает «новый день». Действительно, Навруз — это весна! А весна — это и есть новый день, новая жизнь, когда всё словно возрождается, всё словно просыпается после длинного, глубокого зимнего сна. Все неимоверно прекрасно — сказочно!</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В этом путешествии по Узбекистану мы предлагаем Вам ощутить в полной мере этот поистине счастливый и полный новых надежд праздник! Вам представится необыкновенная возможность не только посетить чудесные города с великой историей, но и познакомиться с культурой гостеприимного народа Узбекистана. К тому же, Вы сможете поучаствовать в национальных ритуалах таких как, например — приготовление сумаляка или плова. Действительно, Навруз превращает Узбекистан особенным — насладитесь весенним ароматом цветущего Узбекистана и почувствуйте, как древние традиции трепетно охраняются и продолжают свою жизнь в этом теплом краю.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Лучшее время для путешествия: март.</p>
                </div>

                <h6>Программа тура 1 вариант:</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 1. — 20.03 — Прибытие в Ташкент. Экскурсия по Ташкенту. Размещение и отдых в гостинице.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 2. — 21.03 – Ташкент. Празднование Навруза, участие в национальном ритуале приготовления сумаляка.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 3. -22.03 — Ташкент-Самарканд. Экскурсия по Самарканду.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 4. — 23.03 — Самарканд. Экскурсия по Самарканду.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 5. — 24.03 — Самарканд – Бухара.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 6. — 25.03 — Бухара. Экскурсия по Бухаре.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 7. — 26.03 — Бухара-Хива.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 8. — 27.03 — Экскурсия по Хиве. Ночной рейс Ургенч- Ташкент. Отдых в гостинице.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 9. — 28.03 — Ташкент. Убытие.</p>
                </div>

                <h6>Программа тура 2 вариант:</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 1. — 14.03 — Прибытие в Ташкент. Экскурсия по Ташкенту. Размещение и отдых в гостинице.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 2. — 15.03 — Ташкент-Самарканд. Участие в национальном ритуале приготовления сумаляка.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 3. — 16.03 — Самарканд. Экскурсия по Самарканду.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 4. — 17.03 — Самарканд – Бухара.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 5. — 18.03 — Бухара. Экскурсия по Бухаре.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 6. — 19.03 — Бухара-Хива.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 7. — 20.03 — Хива. Экскурсия по Хиве. Ночной рейс Ургенч -Ташкент. Размещение и отдых в гостинице.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 8. — 21.03 – Ташкент. Празднование Навруза.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>День 9. — 22.03 — Ташкент. Убытие.</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_navruz as $navruz)
                        @if($loop->iteration == 4 )
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $navruz->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $navruz->title }}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $navruz->date }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $navruz->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$navruz->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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