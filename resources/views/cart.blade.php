@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Корзина</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Корзина</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    <?if(count(Cart::content())){?>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s" style="flex: 0 0 auto; width: 100%;">

                <table class="table">
                    <thead class="thead-primary">
                    <tr>
                        <th><h6 class="tr">Тур</h6></th>
                        <th><h6 class="tr">Цена</h6></th>
                        <th><h6 class="tr">Количество</h6></th>
                        <th><h6 class="tr">Всего</h6></th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $addcart)

                    <tr class="alert" role="alert">
                        <td>
                            <div class="email">
                                <h5>{{ $addcart -> name }}</h5>
                            </div>
                        </td>
                        <td><h5>{{ $addcart -> price }} UZS</h5></td>
                        <td class="quantity">
                            <a class="cart_quantity_up" href="{{ route('plus', ['id'=>$addcart->rowId,'qty'=>$addcart->qty]) }}"><i style="margin-right: 10px" class="fa fa-solid fa-plus"></i></a>
                            <input style="border: none; text-align: center" class="cart_quantity_input" type="text" name="quantity" value="{{ $addcart->qty }}" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href="{{ route('minus', ['id'=>$addcart->rowId,'qty'=>$addcart->qty]) }}"> <i style="margin-left: 10px" class="fa fa-solid fa-minus"></i> </a>
                        </td>
                        <td><h5>{{ $addcart->price * $addcart->qty }} UZS</h5></td>
                        <td>
                            <a href="{{ route('remove', ['id'=>$addcart->rowId]) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="booking p-5">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6 text-white">
                                   <center><h1 class="text-white mb-4">Общая Стоимость Заказа</h1>
                                    <h2 class="text-white mb-4"><?php echo Cart::subtotal(); ?> UZS</h2></center>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-white mb-4">Для Заказа Товара Вам Необходимо Ввести Информацию О Себе</h4>

                                    <form action="#" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control bg-transparent" name="name" placeholder="Your Name">
                                                    <label for="name">Ваше имя</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control bg-transparent" name="email" placeholder="Your Email">
                                                    <label for="email">Ваш e-mail</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input width="540px" type="tel" class="form-control bg-transparent" name="tell" placeholder="Your Name" style="width: 540px">
                                                    <label for="email">Телефонный номер</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control bg-transparent" placeholder="Special Request" name="comment" style="height: 100px"></textarea>
                                                    <label for="message">Оставить комментарий</label>
                                                </div>
                                            </div>

                                            <input type="hidden" value="{{ Cart::subtotal() }}" name="subtotal">
                                            <input type="hidden" value="{{ $addcart->name }}" name="order_name">
                                            <input type="hidden" value="{{ $addcart->price }}" name="price">
                                            <input type="hidden" value="{{ $addcart->qty }}" name="count">

                                            <div class="col-12">
                                                <button class="btn btn-outline-light w-100 py-3" type="submit">Заказать</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? }
    else {?>
    <center><h3 style="color: #86B817">Корзина пуста</h3></center>
    <?}?>

    <!-- About End -->

    <style>
        .tr{
            color: #86B817;
        }
    </style>



@endsection