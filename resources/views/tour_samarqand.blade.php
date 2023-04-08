@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Самарканд – От рассвета до заката</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Самарканд – От рассвета до заката</li>
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
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Чтобы совершить одну из наиболее интересных туров, Вам надо будет заранее приобрести железнодорожные билеты на скорый поезд «Афросиаб» из Ташкента в Самарканд и обратно. Если Вы ограничены во времени, напишите нам и мы с удовольствием сделаем эту работу за Вас.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Тур начинается в 08-00 утра с отбытием скоростного поезда в Самарканд. Уже в 10-10 утра Вы будете доставлены в Самарканд, на главный вокзал города, где Вас встретит наши гид и водитель. Экскурсия длится 5 часов + 1 час на обед в одном из самых знаменитых центров плова.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>У вас будет возможность посетить Мавзолей Гур Эмир, Площадь Регистан, мечеть Биби Ханум, провести время на Сиабском базаре. После обеда мы предлагаем посетить Обсерваторию Улугбека, мавзолей Святого Даниила и некрополь Шахи Зинда.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>К 16-30 вы будете доставлены на вокзал к отбытию поезда в Ташкент. По прибытию в Ташкент в 19-10 Вы можете планировать свой дальнейший досуг.</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_samarqand as $samarqand)
                        @if($loop->iteration == 16)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $samarqand->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $samarqand->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $samarqand-> comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$samarqand->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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