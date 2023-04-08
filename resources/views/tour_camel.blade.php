@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Тур на верблюдах</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Тур на верблюдах</li>
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

                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В Узбекистане есть превосходная возможность совместить пляжный отдых на озере Айдаруль с увлекательным туром на верблюдах.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Тур начнется ранним утром, сразу же после завтрака.</p>
                    <h6>1 день.</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в юртовом лагере. погрузка необходимой поклажи на верблюдов или осликов.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Переход верблюжего каравана до места Туябокар ( 18 км).</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>в течение дня будет остановка у места стоянки чабана ( пастуха) для пикника.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В Туябокаре планируется разбивка палаточного лагеря.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Приготовление ужина и ночевка</p>
                    <h6>2 день.</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>После завтрака выход верблюжего каравана до места стоянки Эски кудук Пикник.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Дальнейшее следование до верблюжей фермы или стоянки чабана.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Разбивка палаточного лагеря. приготовление ужина. Ночь в палатках.</p>
                    <h6>3 день.</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход каравана до Янгиказгана ( 7 км) и возвращение на машинах обратно в легаерь или поход на соляные озера ( 25 км) с ночевкой в палаточном лагере.</p>
                    <h6>4 день.</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>После завтрак возвращение на базу ( юртовый лагерь) или выезд на озеро Айдар Куль для купания.</p>
                </div>


                <div class="row g-4 justify-content-center">
                    @foreach($tour_camel as $camel)
                        @if($loop->iteration == 6)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $camel->img }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $camel->title }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $camel->date }}</small>
                        </div>
                        <div class="text-center p-4">
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{ $camel->comment }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route("addtocart",['id'=>$camel->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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