@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Бухара – В городе крылатого верблюда</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Бухара – В городе крылатого верблюда</li>
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
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мы не случайно назвали тур в Бухару поездкой в город крылатого верблюда. Издревле, древнейшие поверья наших предков связанны с культом верблюда. А образ крылатого верблюда неразрывно связан с древней Бухарой.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Итак, что бы  увидеть Бухару за один световой день,  нам придется спланировать поездку в город с использованием авиа-сообщения Ташкент-Бухара-Ташкент. Самолет обычно прибывает в Бухару в 8-30 утра.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В а/порту Вас встретит водитель и гид. Экскурсионный тур начнется с самого значимого и древнейшего памятника Бухары — Мавзолея династии Саманидов, затем Ваш путь пройдет по территории парка к мавзолею Чашма Аюб и мечети Боло Хауз. Крепость Арк с множеством музеев и наглядных экскпонатов не оставит Вас равнодушным. После обеда Ваш гид начнет экскурсии с площади Ляби Хауз, Вы так же посетите мечеть Магокки Ат Тори, крытые торговые лавки и площадь Калян, с одноименными минаретом и мечетью. Приятным завершением дня будет концерт в медрессе Нодир Девон Беги. После концерта Ваш водитель доставит Вас в а/порт к вылету вечернего рейса в Ташкент.</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_buxara as $buxara)
                        @if($loop->iteration == 17)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $buxara->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $buxara->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $buxara->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$buxara->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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