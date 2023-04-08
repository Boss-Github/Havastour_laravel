@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ташкент – Хива – Бухара – Самарканд</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Туры</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Ташкент – Хива – Бухара – Самарканд</li>
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
                    <h6>День 1 (воскресенье): Ташкент</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>00:20  Прибытие в Ташкент. Трансфер в отель. Размещение. Отдых после перелета. Завтрак в отеле.</p>
                    </div>
                    <div style="margin-top: -13px;">
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>10:00-13:00 Экскурсия по  Ташкенту. Свободное время</p>
                    </div>
                    <div style="margin-top: -13px;">
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>16:00- 19:00 Экскурсия по вечернему Ташкенту. Свободное время. Ночь в отеле.</p>
                    </div>
                    <div style="margin-top: -13px;">
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения: Площадь Абул Касыма, Комплексм Хаст Имам, Базар Чор Су, Музей прикладного искусства,ознакомительная поездка на метро</p>
                    </div>


                    <h6>День 2 (понедельник): Ташкент — Хива</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>05:30 Трансфер  в аэропорт. Вылет в Ургенч, рейсом HY 1051 в 07:00</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>08:40 Прибытие в Ургенч. Трансфер в Хиву (30 км, 40 минут). Завтрак в отеле. Размещение в отеле.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>10:00-13:00 Экскурсионная программа по Хиве. Свободное время</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00-17:00 Продолжение экскурсии.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>17:00 Свободное время. Ночь в Хиве.</p>
                    </div>
                    <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения: Комплекс Ичан Кала с множеством памятников зодчества — Кунья Арк, минарет Кальта Минар, медресе Феруз Хана, Пятничная соборная мечеть, мавзолей Пахлаван Махмуда ( покровителя хорезмиек), Медресе Шергози Хана и Аллакули Хана, базар, гарем и комплекс Таш Хавли</p>


                    <h6>День 3 (вторник): Хива – Бухара</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>07:00  Выезд Бухару (480 км, 7 часов). Дорога ожидает сегодня долгая, преимущественно по пустынной части. Обяхательно необходимо сделать пару остановок для фото и «технических» пауз.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Наиболее рекомендуемые остановки: Дельта реки Амударья, «вторая вышка», поселок «Цветущий»</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>19:00 Прибытие в Бухару. Размещение в отеле. Ночь в Бухаре.</p>
                    </div>


                    <h6>День 4 (среда): Бухара</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>10:00-13:00 Экскурсионная программа по Бухаре.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>13:00-14:00 Свободное время</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00-18:00 Продолжение экскурсионной программы по городу.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>18:00 Свободное время. Ночь в Бухаре.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения: мавзолей Саманидов, мавзолей Чашма Аюб, мечеть Боло Хауз, крепость Арк</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>После обеда продолжение экскурсионной программы</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Посещение комплекса Пои Калян ( мечеть, минарет Калян и медресе Мири Араб)</p>
                    </div>


                    <h6>День 5 (четверг): Бухара – Шахрисабз-Самарканд</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>08-00 Трансфер в Самарканд, через Шахрисабз (270 км, 4 ч). Прибытие в Шахрисабз. Свободное  время</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>13:00-16:00 Экскурсионная программа по городу.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i> 16:00 Продолжение пути в Самарканд.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Прибытие в Самарканд. Размещение в отеле. Свободное время. Ночь в отеле.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения: дворец Ак Сарай, мавзолей Джахонгра, комплекс Дарус Саодат с большой мечетью Кок Гумбаз и мавзолея Гумбази Саидон</p>
                    </div>


                    <h6>День 6 (пятница): Самарканд</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>10:00-13:00 Экскурсия по Самарканду.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>13:00-14:00 Свободное время</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00-17:00 Продолжение экскурсионной программы по городу.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>7:00 Свободное время. Ночь в Самарканде.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения: мавзолей Ак Сарай, мавзолей Гур Эмир, мавзолей Рухабад, площадь Регистан</p>
                    </div>


                    <h6>День 7 (суббота): Самарканд — Ташкент</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Завтрак в отеле</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>09:00-13:00  Экскурсионная программа по Самарканду.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Объекты посещения:</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Обсерватория Улугбека</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Мавзолей святого Даниила</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Музей Афросиаб</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>13:00-14:00 Свободное время</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>14:00-16:00 Продолжение экскурсионной программы по городу.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Мечеть Хазрати Хизр</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Некрополь</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Шахи Зинда</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Выезд в кишлак Кони Гиль к единственной в Самарканде водяной мельнице.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Посещение мастерской по изготовлению бумаги ручным способом</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>17:20 Трансфер на ж/д вокзал. Отбытие в Ташкент на поезде в 18:15.</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>21:43 Прибытие в Ташкент. трансфер в отель,  размещение. Отдых в отеле,  (или экскурсия «Ночной Ташкент»)</p>
                    </div>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>Трансфер в аэропорт 23:00</p>
                    </div>


                    <h6>День 8 (воскресенье): Ташкент</h6>
                    <div>
                        <p><i class="fa fa-arrow-right text-primary me-2"></i>01:50  Вылет утренним рейсом</p>
                    </div>


                    <div class="row g-4 justify-content-center">
                        @foreach($txbs as $txb)
                            @if($loop->iteration ==1)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $txb->img }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $txb->title }}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $txb->date }}</small>
                            </div>
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>{{ $txb->comment }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ route('addtocart',['id'=>$txb->id]) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Забронируйте сейчас</a>
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