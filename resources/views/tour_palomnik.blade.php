@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Туры для паломников</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Туры для паломников</li>
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
                <h6 style="margin-bottom: 20px;">Суфийский тур</h6>

                <div>
                    <h6>День первый — Ташкент</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Прибытие в Ташкент</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Размещение в гостинице</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Шайхантахура, мавзолей Калдиргачбия, мавзолей Зайнутдин-бобо, Дом где жил суфийский мастер Ходжа Ахрор-вали, мавзолей Каффаль Шаши, медресе Кукельдаш, медресе Баракхана</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <h6>День второй — Самарканд</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Отъезд в Самарканд на комфортабельном (микро)автобусе. Время в пути 4,5-5 часов. Путевая информация.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Размещение в гостинице «Малика-Самарканд» (или в другом такого же класса)</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед в одном из Самаркандских двориков, расположенных в старой части города</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Комплекс Шахи-Зинда, Мечеть Хазрати Хизр, мавзолей Имом Аль-Бухари,</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <h6>День третий — Самарканд</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Поездка в Ургут (40 км от Самарканда) посещение святого места, связанного с именем основателя суфийского ордена «Кадирийа» Говсули Аъзам Абдул Кодир, Ургутские Чинары, возвращение в Самарканд</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ходжа Абду-дарун, Ходжа Абду-берун, гробница Ходжа Ахрор-вали</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <h6>День четвертый — Самарканд</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Посещение пещеры, в которой скрывался Давид — отец библейского царя Соломона. Пещера находится в 40 км от Самарканда в горах. При плохих погодных условиях может быть отменена.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Амир-Тимура, Мечеть Рухобод, площадь Регистан, Бибихоним, гробница Святого Даниила.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выезд в Бухару. Время в пути 4,5-5 часов.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Отдых</p>
                    <h6>День пятый — Бухара</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Гробница учителя Баховуддина  Накшбанди — Хазрат Саида Амир Кулола, место захоронения матери Баховуддина Накшбанди, гробница Баховуддина Накшбанди</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей Саманидов, Чашмаи Аюб, Лаби Хауз, Арк</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <h6>День шестой — Бухара</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Гробница Ходжи Абдулхоки Гиждувоний (г.Гиждуван)</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед (знаменитая на весь Узбекистан гиждуванская кухня — шашлыки, самса, шурпа и т.д.)</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Чор Бакр, Медресе Мири Араб, Мечеть Намазгох</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин</p>
                    <h6>День седьмой — последний</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выезд в Самарканд. Время в пути 4-4,5 часов</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обед в Самарканде</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выезд в Ташкент. Время в пути 4-4,5 часов</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ужин и проводы.</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_palomnik as $palomnik)
                        @if($loop->iteration == 9)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $palomnik->img }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $palomnik->title }}</small>
                        </div>
                        <div class="text-center p-4">
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{ $palomnik->comment }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route("addtocart",['id'=>$palomnik->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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