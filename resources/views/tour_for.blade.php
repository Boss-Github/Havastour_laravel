@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Туры для людей с ограниченными физическими возможностями</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Туры для людей с ограниченными физическими возможностями</li>
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
                <h6 style="margin-bottom: 20px;">Вы решились на дальнее путешествие в Узбекистан на инвалидной коляске?</h6>
                <div>
                    <h6>Мы преклоняемся перед Вашим решением! Вы Молодец!</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Вы должны знать, что в Самарканде есть команда единомышленников, готовая помочь в организации тура для Вас.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мы работаем в сегменте доступного туризма для всех, будь это люди ограниченные в движении ( колясочники), слабослышащие или слабовидящие.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Предупреждаем сразу, что долгое время сегмент доступного туризма оставался за рамками интересов предпринимателей, держателей гостиниц, ресторанов и других объектов сферы предоставления услуг. Не всегда есть доступные возможности для передвижения на инвалидных колясках на экскурсионных объектах, очень мало оснащения в виде подъемников, в транспортных средствах. Бывает очень трудно найти специалиста для сурдоперевода, нет обученных гидов, которые могли бы работать со слабовидящими гостями. Но такая ситуация не будет оставаться всегда в таком виде. Постепенно приходит осознание того, что нам дорог каждый гость желающий приехать в Узбекистан. И со временем исчезнет грань между понятием туризм для людей с ограниченными физическими возможностями.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Наша команда провела колоссальную работу по выявлению ключевых моментов для организации туров для всех желающих оставить свои квартиры хотя бы на время и открыть новые горизонты.</p>
                <h6>Вы можете рассчитывать на нашу команду в следующих пунктах:</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>предоставление информации о гостиницах подходящих под необходимые требования ( такие как высота и ширина дверных проемов, высота унитазов, гибкость душевых кабинок, наличие поручней в ванной комнате, наличие телефонов, специалистов ( врачей, медицинских сестер), возможность вызова массажистов в номер, подбор номеров с кроватями необходимой высоты)
                        предоставление постоянного сопровождающего ( волонтера) говорящего на Вашем языке
                        предоставление транспортных услуг с водителем
                        предоставление гида со специально разработанным маршрутом ( посещение объектов где отсутствуют лестницы, есть лифты или подъемники
                        предоставление сервиса сурдопереводчика ( с технической возможностью дублирования поданной информации на электронных носителях (планшет) или в виде текстовой информации.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Предоставление сотовых телефонов с сим картой для постоянной связи с курирующим тур оператором ( 24 часа в сутки)</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Список врачей в городах пребывания, готовых выехать к Вам для необходимой медицинской консультации</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Подбор ресторанов отвечающим вашим требованиям по специальному (предписанному) питанию</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_for as $for)
                        @if($loop->iteration == 10)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $for->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $for->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $for->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$for->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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