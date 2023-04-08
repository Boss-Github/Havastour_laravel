@extends("main.main")

@section("content")

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">О нас</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">О нас</li>
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
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/public/havastour/img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">О нас</h6>
                <h1 class="mb-4">Добро Пожаловать На Нашу <span class="text-primary">Страницу!</span></h1>
                <p class="mb-4">Сотни и сотни благодарных гостей, музыкантов, бизнесменов, студентов, спортсменов, фотографов, археологов, авантюристов, журналистов, мам, пап, их детей, бабушек и дедушек прокатились на верблюдах, осликах, роликах и велосипедах, проехали на мотоциклах, на своих машинах, пролетели на своих частных самолётах, самолётами узбекских авиалиний с нами по Великому Шёлковому пути.</p>
                <p class="mb-4">Мы Предлагаем Вам Разнообразные Варианты Туров:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Культурные</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Археологические</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Экзотические</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Экстремальные</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Гастрономические</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Сафари на верблюдах</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Фотоохота и рыбалка</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>И это ещё далеко не всё!</p>
                    </div>
                </div>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.6s" style="flex: 0 0 auto; width: 100%;">
                <h6>Mы Предоставляем Большой Спектр Туристических Услуг:</h6>
                <div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Бронирование авиабилетов</p>
                </div>
                <div style="margin-top: -13px;">
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Организация транспортных услуг</p>
                </div>
                <div style="margin-top: -13px;">
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Гостиничное размещение</p>
                </div>
                <div style="margin-top: -13px;">
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Обеспечение визовой поддержки</p>
                </div>
                <div style="margin-top: -13px;">
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Организация питания</p>
                </div>
                <div style="margin-top: -13px;">
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Планирование досуга</p>
                </div>
                    <p>У нас вы можете забронировать целый тур пакет, или же исполнение отдельной его части.</p>
                <h6>С Опытом Приходит Мастерство:</h6>
                <p><i class="fa fa-arrow-right text-primary me-2"></i>Насчитывая период работы каждого из сотрудников в области туризма, имеется 40 лет накопленного опыта, сотни тысяч километров, пройденных по маршрутам Узбекистана и сотни довольных гостей.  У нас были гости из России, Австралии, Англии, Японии, Германии, Франции, Польши, Швейцарии, Бразилии, Новой Зеландии, Австрии, Украины, Дании, Ирана и Индии. Сотрудники компании говорят на семи языках мира.</p>
                <h6>Наше Качество – Залог Вашево Доверия:</h6>
                <p><i class="fa fa-arrow-right text-primary me-2"></i>Вся программа будет организована с учётом всех ваших пожеланий. Мы работаем только для вас и ради вас.</p>
                <h6>С Нами Легко!</h6>
                <p><i class="fa fa-arrow-right text-primary me-2"></i>Напишите нам и всю остальную работу мы возьмём на себя.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">ПУТЕВОДИТЕЛЬ</h6>
            <h1 class="mb-5"> Коллектив Компании «Havas tour service».</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/5.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Аманбаева Наргиза</h5>
                        <details>
                            <summary class="ruko">Руководитель Фирмы</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>В сфере туризма с 1996 года. Еще при учебе в УзГУМЯ закончила курсы по подготовке гидов-экскурсоводов. Более 10 лет работала гидом сопровождающим. Проехала по маршрутам всех соседних азиатских республик. Руководит компанией с 2010 года. Сейчас, основная работа связана с ведением дел на фирме, но при первой же возможности, всегда готова сесть за руль и с фотоаппаратом наперевес умчаться в неизвестный горный кишлак или пустынный аул, для встречи с интересными людьми и за эксклюзивными фотографиями. Руководит работой тур операторского отдела.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/6.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Нигина Садыкова</h5>
                        <details>
                            <summary class="ruko">Управляющий Менеджер</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Являясь учредителем компании, Нигина тесно связана с жизнью фирмы на протяжении всего периода работы в ней. За плечами Нигины учеба в институте иностранных языков г. Самарканда. Владение двумя иностранными языками существенно облегчает ее работу в сфере маркетинга.  Нигина отвечает за работу отдела сервиса обслуживания туристов, представляет компанию во всех международных выставках. В руководимом ею отделе заказанный тур проходит все технические обработки. От предоставления документов в МИД для визы, и заканчивая разработанным меню в ресторанах, куда впоследствии приедут туристы по заказанному маршруту.  Нигина так же руководит работой по загрузке автопарка компании. Мечтает о путешествии в Ирландию.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/7.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Виктория Бекирова</h5>
                        <details>
                            <summary class="ruko1">Главный Бухгалтер Фирмы</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Виктория является самым невозмутимым сотрудником компании. Ее основной девиз «Дебет должен соответствовать кредиту». Вика закончила Самаркандский кооперативный институт (сейчас Институт Экономики и Сервиса). Долгое время преподавала Бухгалтерский учет доброй половине бухгалтеров Самарканда. Любит свою работу и знает, что 5 на 2 делится. Вика выступает всегда за технический прогресс, особенно в программах по ведению Бух.учета. Работает почти на всех программах, когда либо разработанных в учетной системе. При необходимости вручную нарисует «шахматку» любой сложности.</p>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Вика мечтает отдохнуть в Черногории, на Кипре и в Греции.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/4.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Файзуллаева Фарзуна</h5>
                        <details>
                            <summary class="voditel">Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Студентка Самаркандского института иностранных языков. Добрая и отзывчивая, легко располагает к себе людей. Владеет английским языком. Готова подобрать для вас подходящий тур, интересный и выгодный по цене. Самое главное для Фарзуны – организовать запоминающееся путешествие и обеспечить яркие впечатления. В свободное время занимается изучением китайского языка и чтением исторической литературы.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/3.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Исакова Алина</h5>
                        <details>
                            <summary class="ruko">Менеджер, Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Алина выпускница колледжа туризма. На данный момент студентка Самаркандского Государственного Университета. Владеет английским языком. В свободное время занимается изучением немецкого языка и чтением книг.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/2.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Аблаева Февзие</h5>
                        <details>
                            <summary class="ruko1">Гид С Немецким Языком, Туроператор</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Закончила Институт иностранных языков. Основным иностранным языком  является немецкий. Февзие сопровождает группы по маршрутам, проходящим в Узбекистане. Хорошо знает историю, легенды, обычаи и кухню узбекского народа. Всегда интересно проводит туристам экскурсии. Каждая группа, с которой она работала,  уезжала с незабываемыми впечатлениями и самыми лучшими фотографиями. Февзие неоднократно была в Германии, где пополняла свои знания  в сфере ведения и обслуживания туристических групп. Владеет сертификатом международного образца. Очень ответственна, хорошо знает свое дело и в свободное время работает над собой.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/1.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Джуманиязов Махсуд</h5>
                        <details>
                            <summary class="ruko">Гид С Немецким Языком</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Закончил Самаркандский институт иностранных языков. Общительный и открытый человек. Махсуд приятный собеседник с хорошим чувством юмора. Владеет обширными знаниями в области истории и имеет широкий кругозор. Мечтает совершить кругосветное путешествие.</p>
                             </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/8.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Садыков Саид</h5>
                        <details>
                            <summary class="voditel">Водитель</summary>
                            <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Саид дружелюбный, искренний и внимательный. Знает все дороги в Узбекистане. В свободное время посвящает изучению иностранных языков и просмотру документальных фильмов. Хорошее чувство юмора и общительность Саида сделают вашу поездку увлекательной и познавательной.</p>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/public/havastour/img/9.jpg" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Болтаев Зохид</h5>
                        <details>
                        <summary class="voditel">Водитель</summary>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Работает на фирме с самого её зарождения. Одним из лучших качеств Зохида является его способность оказать другим бескорыстную помощь. Зохид энергичный и заряжает своим энтузиазмом других. Тактичность и деликатность позволяют ему всегда быть хорошим собеседником и другом.</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<style>
    .voditel{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 120px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .ruko{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 200px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .ruko1{
        font-size: 15px;
        padding: 2px;
        color: #fff;
        background: #86B817;
        border-radius:20px;
        width: 230px;
        margin: auto;
        margin-top: 10px;
        list-style: none;
    }
    .text{
        margin-top: 10px;
    }

</style>

    @endsection


