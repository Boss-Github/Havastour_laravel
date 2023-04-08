@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Треккинг тур Кумышкан-Бельдерсай</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Треккинг тур Кумышкан-Бельдерсай</li>
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
                <h6>СПЕЦИАЛИЗАЦИЯ</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>трек</p>
                </div>
                <h6>РАЙОН  ПРОВЕДЕНИЯ</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Республика  Узбекистан, Ташкентская  область, Западный  Тянь-Шань</p>
                </div>
                <h6>СРОКИ  ПРОВЕДЕНИЯ</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>июнь — сентябрь</p>
                </div>
                <h6>Продолжительность</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>9 дней</p>
                </div>
                <h6>Маршрут</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Кумышкан – р. Аксаката – р. Карангур – пер.  Аксаката – пер. Скользкий – пер. Тахта. пер. Кумбель – Бельдерсай.</p>
                </div>
                <h6>Протяжённость</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>75 км</p>
                </div>
                <h6>Оптимальный состав группы</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>10  человек</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Увлекательный тур начинается и заканчивается в двухтысячелетнем Ташкенте, который поразит Вас экзотикой старого города, шумными и богатыми базарами, памятниками старины и современной архитектурой, а главное – традиционным восточным гостеприимством. Горный район Западного Тянь-Шаня начинается в 70 км к востоку от Ташкента. На площади примерно 20 тыс. кв. км между Таласской и Ферганской долинами находятся 5 главных хребтов, имеющих многочисленные разветвления.  Это такие хребты: Угамский, Кураминский, Чаткальский, Коржантау, Пскемский. Насыщенность района различными вершинами, гребнями, реками, озерами, своеобразные природные и климатические условия являются благоприятными для совершения горных путешествий. Лето (июль-август) в долинах жаркое и сухое, но выше в горах царит прохлада. Активная часть маршрута познакомит Вас с  живописнейшими уголками ЗападногоТянь-Шаня. Прохождение перевалов  не представляет трудностей, так как перевалы травянисто-осыпные.</p>
                </div>
                <h6>Программа:</h6>
                <h6>1 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Прибытие в Ташкент. Встреча в аэропорту. Трансфер в отель.</p>
                </div>
                <h6>2 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В 8 часов  трансфер  Ташкент – Кумышкан ~ 65  км. Переход  до слияния рек Аксаката и Кашкасу  (5 часов) лагерь 1.</p>
                </div>
                <h6>3 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 9 часов. Переход  вверх по реке Аксаката  (5 – 6 часов) лагерь 2 на широкой поляне  у реки  Аксаката.</p>
                </div>
                <h6>4 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 9 часов. Переход  в верховья Карангурсая (5 – 6 час). Лагерь 3 на поляне у начала  подъёмной тропы  на перевал Аксаката.</p>
                </div>
                <h6>5 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 9 часов. Подъём  на перевал  Аксаката  (2450 м н / к), далее движение по гребню Мингджилки до перевала Скользкий (2690 м 1А)  5 – 6 часов, лагерь 4 на седловине перевала Скользкий.</p>
                </div>
                <h6>6 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 8 часов. С перевала Скользкий  движение  до перевала Тахта  2620 м 1А (2 –3 часа) гору Джар обходим  по ходу справа, затем спускаемся на перевал Кумбель 2550 м н / к (2- 3 часа),  лагерь 5 на седловине перевала Кумбель у родника.</p>
                </div>
                <h6>7 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 9 часов. С перевала  Кумбель  траверсируя склоны  Б. Чимгана спускаемся на перевал  Чет Кумбель 1830 м  н / к, лагерь 6 на поляне Шелконсу.</p>
                </div>
                <h6>8 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Выход на маршрут в 9 часов. С поляны Шелконсу, спуск в ущелье  Бельдерсай (2 часа). Трансфер в Ташкент  (~ 90 км), 2 часа. Размещение в отеле.</p>
                </div>
                <h6>9 день</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Трансфер в аэропорт. Вылет. Окончание тура.</p>
                </div>
                <h6>Дополнительная информация:</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Портеры – количество портеров в треке оговаривается  заранее. Вместо портеров можно брать напрокат лошадь.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Туристы обеспечиваются: двухместными палатками, просторной кают-компанией (палатка » Зима “), необходимым горным снаряжением, посудой, медаптечкой общего назначения.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Личные вещи необходимые для похода: рюкзак, спальник, каремат, спортивный костюм, куртка,  запасной комплект одежды (утепленной), ботинки VIBRAM , солнцезащитные очки, шерстяная шапочка, накидка от дождя, предметы личной гигиены, крем (от солнца, для рук), личная медаптечка,  фонарик.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Личные вещи туристы переносят  самостоятельно.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_kumushkon as $kumushkon)
                        @if($loop->iteration == 5)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $kumushkon->img }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $kumushkon->title }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $kumushkon->date }}</small>
                        </div>
                        <div class="text-center p-4">
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{ $kumushkon->comment }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route("addtocart",['id'=>$kumushkon->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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