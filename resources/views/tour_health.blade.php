@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Оздоровительные туры</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Оздоровительные туры</li>
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
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Климатические условия Узбекистана, где на юге страны царит суб тропический, а на севере континентальный климат, создали на территории страны идеальные условия для формирования определенных санаторных и курортных клиник, пансионатов и лечебниц.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Южная часть региона, где по большей части расположены горные отроги и большие горные массивы позволили создать санатории для лечения дыхательных и жкт болезней. Множество соляных пещер, где можно пройти определенный курс лечения по возмещению дефицита йода в организме.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Множество минеральных источников в центральной части Узбекистана позволяют лечить болезни желудка. Созданы так же условия для бальнеологического лечения в санаториях Ташкентской области и Ферганской долины.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Пустынный климат и наличие озер со слабым содержанием солей (Айдар Куль, Туда Куль, Шур Куль) позволяют лечить болезни опорно-двигательной системы человека.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Санатории в Зааминском национальном парке, где особой гордостью является хвойный лес, позволяют людям болеющим астмой и различными заболеваниями дыхательной системы, поправить свое здоровье на территории этого огромного парка.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Санатории Бухарского региона нацелены на лечение болезней почек и мпп человека.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Вы решили принять курс оздоровительного лечения  в Узбекистане? Вы сделали правильный выбор.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Если Вам необходима информация по той или иной лечебнице, пансионату, санаторию, просим написать нам по е-майлу info@samarkand-tours.com и мы в кратчайшие сроки направим Вам все необходимые данные.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_health as $health)
                        @if($loop->iteration == 12)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $health->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $health->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $health->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$health->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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