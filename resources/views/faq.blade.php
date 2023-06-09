@extends("main.main")

@section("content")


    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FAQ</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">FAQ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h6>Визовые вопросы</h6>
                <div class="faqs">

                    <details>
                        <summary>1. Виза: Какие документы требуются для въезда в Узбекистан?</summary>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Для въезда в Республику Узбекистан на 60 дней безвизовый режим действует для граждан России, Украины, Белоруссии, Казахстана, Молдовы, Грузии, Кыргызстана, Азербайджана, Армении. Граждане этих стран должны иметь при себе загранпаспорт.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Упрощенный порядок оформления виз для въезда действует для граждан Франции, Японии, Швейцарии, Австрии, Бельгии, Германии, Великобритании, Испании, Италии, Латвии и Малайзии. Туристам из этих стран выдаются многократные визы сроком до 1 месяца, а представителям деловых кругов – до 1 года (Малайзии – до 6 месяцев), при этом не требуется турваучер или обращение приглашающего юридического или физического лица в Узбекистане в МИД Республики Узбекистан. Визы оформляются в течение 2 рабочих дней, не считая дня приема документов. Для получения дополнительной информации, пожалуйста, перейдите по ссылке: Виза в Узбекистан</p>
                    </details>

                    <details>
                        <summary>2. Можно ли получить визу по прилету в аэропорту Ташкента?</summary>
                        <p class="text">Визу в аэропорту города Ташкент можно получить только при следующих условиях:</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Если Вы являетесь гражданином страны и прибываете из страны, в которой нет консульства или посольства Республики Узбекистан.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Если у Вас нет достаточно времени, чтобы получить визу в транзитной стране, в которой есть консульство или посольство Республики Узбекистан (для этого необходимо предъявить авиабилет подтверждающий дату вылета в Узбекистан в ближайший срок).</p>
                    </details>

                    <details>
                        <summary>3. Что такое письмо-приглашение, групповая виза и консульские сборы?</summary>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Письмо приглашение – это документ, позволяющий получить въездную визу в страну.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Визовая поддержка для туристических виз оформляется туристическим агентством и подается в МИД на рассмотрение. Документ рассматривается в МИДе Республики Узбекистан, который имеет полное право отказать в разрешении въезда в страну, не предоставляя при этом причин отказа.
                            Одобренная визовая поддержка отправляется телексом в Посольство или Консульство Республики Узбекистан, где турист планирует получить визу. Однако, эта процедура не гарантирует получение визы в Посольстве.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Групповая виза выдается группе туристов. Группа – это пять или более человек, путешествующих в одинаковые места с одинаковой целью.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Консульские сборы – это сумма, которая должна быть оплачена в консульстве или посольстве для получения визы.</p>
                    </details>

                    <details>
                        <summary>4. Что нужно знать об электронной визе в Узбекистан?</summary>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Электронную визу в Узбекистан могут получить граждане более 80 стран мира. Для этого необходимо зайти на портал e-visa, заполнить все формы и ждать 2 рабочих дня. В итоге, на почту заявителя приходит письмо с ссылкой на портал, где можно скачать готовую электронную визу (в формате PDF). Портал выдает только туристические визы.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Важно помнить, что электронную визу необходимо распечатать и предъявлять при въезде в Узбекистан и при выезде из страны.</p>
                        <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Также, стоит знать особенности срока действия электронной визы. Виза позволяет находиться в Узбекистане до 30 дней, но при этом действительна всего 90 дней с момента выдачи. Таким образом, если турист въезжает в Узбекистан через 70 дней после получения е-визы, то он может находиться в стране только 20 дней.</p>
                    </details>

                </div>

            <h6>До прибытия</h6>

            <div class="faqs">

                <details>
                    <summary>1. Какое время года лучше всего подходит для поездки в Узбекистан? Какую одежду брать с собой?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Весна (с апреля по июнь) и осень (с сентября по октябрь) в основном самые приятные времена года для путешествия. Погода в это время ясная, в апреле в пустыне наступает недолгая, но красочная весна. Осень – это время сбора урожая, и рынки полны свежих фруктов. Для тех, кто увлекается походами, лето (июнь и август) будут лучшим временем, потому что лето в Узбекистане почти сухое.</p>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Температура воздуха зимой варьируется от -5 до +5 °C. Снег не редкость для Узбекистана, но чаще всего зимы здесь достаточно солнечные. Вам нужно взять с собой теплую одежду, перчатки, теплые головные уборы, если Вы планируете поездку в зимнее время.</p>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Весной в Узбекистане очень приятная погода. Температура воздуха днем от +15 до+25, ближе к лету может потеплеть до +30 – +35. Лучше всего взять с собой легкую, повседневную одежду для прогулок днем. Легкая куртка или вязаный кардиган станут отличным решением для вечерних прогулок.</p>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Будьте готовы к достаточно высокой температуре воздуха (+36 – + 42), если Вы планируете Вашу поездку в летнее время. В Узбекистане очень «активное» солнце, поэтому обязательно возьмите с собой головной убор или зонт. Погода ранней осенью мало отличается от весенней погоды. Вам пригодится легкий свитер или куртка на вечер, днем вы можете носить летнюю одежду. Вторая половина осени ( начиная с середины октября) – гораздо прохладнее. Если вы планируете путешествие на это время, возьмите с собой теплую одежду – куртку, плащ. Температура воздуха осенью от +35 градусов в начале сезона и до +15 градусов в конце ноября.</p>
                </details>

                <details>
                    <summary>2. Имеется ли ограничение в одежде для женщин?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>В основном в Узбекистане нет строгих ограничений в одежде, особенно в Ташкенте и в других больших городах, в которых царит полная свобода в выборе одежды, особенно среди молодежи. Хотя вы часто увидите молодых девушек одетых в традиционную одежду, но это больше личное предпочтение чем обязательный атрибут.</p>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>В некоторых областях Узбекистана, например, таких как Ферганская долина, лучше не одевать шорты. Такого же правила стоит придерживаться посещая религиозные места: мечети, мавзолеи и т.д. Также, женщинам следует прикрывать плечи и грудь и, желательно, надевать шляпу или платок.</p>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>В летнее время года стоит следовать этим рекомендациям еще и чтобы защитить себя от прямых солнечных лучей. Также можно использовать солнцезащитные лосьоны.</p>
                </details>

                <details>
                    <summary>3. Можно ли привозить алкогольные напитки в Узбекистан?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>При въезде в Узбекистан, вы можете привезти с собой до двух бутылок алкогольных напитков на человека.
                        Важно: Для граждан летящих из Узбекистана в ЕС действует ограничение по количеству вывозимой жидкости в ручной клади: объем емкостей, содержащих жидкость (алкоголь, крема, духи и т.д.), не должен превышать 100 мл, а суммарный объем не более 1 литра.</p>
                </details>

                <details>
                    <summary>4. Нужны ли мне какие-либо прививки?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Нет, особых предписаний туристам нет.</p>
                </details>

                <details>
                    <summary>5. Можно ли ввозить в Узбекистан лекарства для личного пользования?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Да, однако есть ряд ограничений. Некоторые успокоительные, болеутоляющие и снотворные препараты запрещены или их ввоз ограничен, некоторые медикаменты можно ввозить имея рецепт от врача, а разрешенные лекарства не требующие рецепта врача ограничены лишь в количестве.</p>
                </details>

                <details>
                    <summary>6. Могу ли я приобрести SIM-карту местного оператора мобильной связи?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Да, для этого понадобится паспорт и регистрация из гостиницы. Минимальная стоимость подключения обычно составляет 1$ (но оплата производится в местной валюте – сум), далее можно приобрести дополнительный пакет услуг, как к примеру Интернет-пакет. SIM-карты оператора UMS можно приобрести сразу же по прилету, правда пока только в аэропортах Ташкента и Бухары. Пункты продаж операторов мобильной связи, среди которых также представлены компании-операторы Uzmobile, Ucell, Beeline можно в любой центральной локации города, включая вокзал в Ташкенте. Находясь в исторических центрах, обращайте внимание на табличку WI-FI – бесплатная услуга для удобства гостей сейчас представлена там повсеместно. И конечно, уже даже самые скромные гостевые дома обзавелись собственным WI-FI роутером, бесплатно предоставляя доступы для постояльцев.</p>
                </details>

                <details>
                    <summary>7. На каком языке говорят местные?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Несмотря на то, что официальным языком является узбекский, многие люди владеют русским. В Самарканде, Бухаре и некоторых других областях также используется таджикский язык.</p>
                </details>

                <details>
                    <summary>8. Что запрещено ввозить в Узбекистан?</summary>
                    <p class="text"><i class="fa fa-arrow-right text-primary me-2"></i>Наркотические и психотропные средства, взрывоопасные вещества, материалы, наносящие вред построению государства и обществу, направленных на войну, терроризм, насилие, экстремизм, порнографию, а также, этилового спирта, распространителя лазерного луча, беспилотных летающих аппаратов, пиротехнических средств, игровых автоматов, связанных с денежным выигрышем, б\у автотранспортных средств категории “М2”, “М3” и “N2”, новых автотранспортных средств, степень зараженности которых не соответствует требованиям экологического класса “Евро-3”, движущихся на бензине или на дизельном топливе, кроме того, бытовых электрических приборов с эффективностью энергии класса «G» ва «F», а также лампочек накаливания с мощностью, превышающей 40 ватт.</p>
                </details>

            </div>


            </div>
        </div>
    </div>
    <!-- Contact End -->

    <style>
        @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

        .faqs{
            padding: 2px 20px 20px;
        }
        details{
            box-shadow: -3px 3px 10px rgba(0,0,0,.1);
            padding: 10px 20px;
            border-radius: 7px;
            margin-top: 20px;
            font-family: 'Rubik', serif;
            font-size: 16px;
            letter-spacing: 1px;
        }
        details summary{
            list-style: none;
        }
        .text{
            margin-top: 20px;
        }
    </style>

@endsection