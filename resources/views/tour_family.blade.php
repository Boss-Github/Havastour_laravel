@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Тур для семьи с детьми</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("tour") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Тур для семьи с детьми</li>
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
                <h6 style="margin-bottom: 20px">Путешествие в Узбекистан с детьми — это самая классная идея. В Узбекистан можно приезжать как с детьми,  так и с их бабушками и дедушками.</h6>
                <div>
                    <h6>Во первых</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Относительно быстрый перелет, по сравнению с другими странами.</p>
                    <h6>Во вторых</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Здесь все говорят по русски. И Вам не придется таскать с собой еще и переводчика, который не скоро привыкнет к Вашим детям.</p>
                    <h6>В третьих</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Здесь есть отличная инфраструктура для детей. И они могут быть самозанятными на всем протяжении поездки.</p>
                    <h6>Следующие позитивные пункты</h6>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Наличие семейных номеров и гостиниц с бассейном, наличие хорошего транспорта, скидки для детей на все виды услуг, возможность для родителей сделать необходимые покупки, пока дети заняты на занятиях по интересам ( мастер классы).</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Ваш ребенок почувствует себя в Узбекистане как дома. Он получит здесь массу знаний и навыков, научиться купаться в теплых водах Айдаркуля, научиться сидеть верхом на верблюде и пройдет свой первый караванный переход по пустыне заночевав в юрте, научится стрелять из лука, пройдет горными тропами в Чимганских или Нуратинских горах, изготовит бумагу из шелка, которую получит на память, и в последствии напишет письмо своей бабушке, смастерит свой первый сувенир и подарит его своей учительнице, накупит целую кучу «феничек» и раздарит их в классе.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Приехав к нам, Вы обязательно попадете на узбекские базары полные фруктов. Спелые абрикосы, душистые яблоки, сочный виноград, впитавший в себя тепло солнца, дыни и арбузы, пищу фараонов — желтый и черный инжир, гранат и хурма — все это богатство по сезону будет ждать Вас на наших базарах.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Узбекские повара ждут Вас на плов, шашлык, лагман, самсу и другие вкусности.</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Приехав в Узбекистан, Вы обязательно научитесь готовить плов, в добавок, наш повар расскажет Вам секрет «мариновки» мяса для шашлыка ( под расписку о неразглашении, конечно) .</p>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Приезжайте, и Вы не пожалеете о проведенном времени….</p>

                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($tour_family as $family)
                        @if($loop->iteration == 13)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $family->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $family->title }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $family->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route("addtocart",['id'=>$family->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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