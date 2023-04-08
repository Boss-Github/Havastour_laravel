@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Туры для школьников</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Туры для школьников</li>
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
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>С наступлением каникул, каждая семья думает о полезном проведении времени для ребенка.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Вместе с нашей командой,  все, кто думает серьезно и с пользой провести каникулы вместе с детьми сможет организовать такой тур.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Вместе с нами в команде могут быть родители, учителя, руководство школ, колледжей, лицеев и ВУЗов.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мы с удовольствием проведем тематические экскурсии по стране или в одном выбранном всем классом городе.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>На сегодняшний день в Узбекистане представлен широкий выбор технических возможностей для  проведения подобных экскурсий — это и скоростные поезда, позволяющие за один световой день посетить Самарканд и Бухару, и хороший транспорт туристического класса, и удобное авиа-расписание.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Напишите нам по е-майлу info@samarkand-tours.com и мы отреагируем на Ваш запрос предложив тур по интересам.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_school as $school)
                        @if($loop->iteration == 11)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $school->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $school->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $school->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$school->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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