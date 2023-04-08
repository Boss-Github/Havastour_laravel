@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ташкент – Экскурсия на Даблдекере</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Ташкент – Экскурсия на Даблдекере</li>
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

                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Самым экономичным видом знакомства с Ташкентом является экскурсия на специальном двухэтажном экскурсионном автобусе. Протяженность тура составляет 2,5 часа и стоит 20 Долларов по курсу Центрально банка на день покупки билета. Для детей до 7 лет поездка бесплатна. Билет действует в течение всего дня. Экскурсии ведутся в записи на 8 языках по выбору.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Автобусы отправляются от гостиницы «Узбекистан» в будни: 9:00, 10:00, 12:00, 13:00, 18:00, 19:00, 20:00 и 21:00; в выходные: 9:00,10:00,11:00,12:00,13:00, 14:00, 15:00, 16:00, 17:00, 18:00, 19:00, 20:00, 21:00. Понедельник — выходной день. Экскурсия длится до 18:00 2 часа, после 18:00 1 час,40 минут.</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_bus as $bus)
                        @if($loop->iteration == 15)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $bus->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $bus->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $bus->title }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart", ['id'=>$bus->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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