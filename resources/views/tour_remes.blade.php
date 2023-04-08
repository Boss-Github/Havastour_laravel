@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Тур в ремесленные мастерские</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Тур в ремесленные мастерские</li>
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
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В Узбекистане, по  следованию любого выбранного маршрута можно организовать экскурсии в ремесленные мастерские.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В Ташкенте Вы с удовольствием проведете время в мастерских ташкентских художников, в семье кожевенных дел мастера, в частном музее керамики.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Самарканд ждет Вас в мастерских по производству ковров из тонкого самаркандского шелка, мастера по производству шелковой бумаги с удовольствием расскажут Вам секреты ее приготовления. Домоседки — сюзаначи пригласят Вас на топчан, где разложены красивейшие сюзане ( гобелены) и покажут, как они вышивают эти поистине прекрасные полотна.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>В Гиждуване потомственный мастер расскажет секреты гиждуванской керамики.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Бухарские фотографы покажут свои фотографии ( бухарская школа фотографии), чеканщики дадут Вам молоточек и медную посуду и научат Вас древнему искусству чеканки. На фабрике золотошвеек Вы найдете самые красивые образцы полотен вышитых золотыми нитками ( кстати В.В. Путин имеет у себя в гардеробе самый красивый бархатный халат, вышитый бухарскими мастерицами.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Хива ждет Вас, что бы рассказать про самых именитых скорняжных дел мастеров. Резьба по дереву приобрела здесь воистину роскошный вид. Мастер по производству кукол даст Вам в руки бумагу и научит самому древнему ремеслу по производству фигурок из папье маше. Семья уличных циркачей покажет свое искусство ходьбы по канату.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ферганская долина собрала самых именитых мастеров по производству шелка и иката. Потомственные мастера покажут искусство окраски тканей.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Наманганские кузнецы изготовят самый знаменитый чустских нож при Вашем присутствии и Вы при этом можете помочь им в работе ( молот был всегда к лицу удалому молодцу).</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Риштанская керамика так же будет очень интересной для Вас.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Байсун — здесь живут мастера по производству музыкальных инструментов. А как любят здесь лошадей. Игра в Улак закалила здешних парней и дети с сызмальства держаться на лошадях не хуже арабских принцев.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Нукус — Вам когда нибудь было интерсно увидеть как можно собрать юрту за 2 часа. А из чего она состоит, и как делается? Не переживайте здешний мастер все покажет, все расскажет и чаю заварит в гостевой юрте.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_remes as $remes)
                        @if($loop->iteration == 8)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $remes->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $remes->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $remes->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$remes->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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