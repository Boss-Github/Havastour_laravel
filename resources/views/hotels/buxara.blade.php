@extends("main.main")

@section("content")

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Бухара</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("index") }}">Отели</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Бухара</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    @foreach($information_buxara as $about)
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ $about->img }}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h3 style="margin-bottom: 20px;">{{ $about->name }}</h3>
                        @if($loop->iteration >0 && $loop->iteration <8)
                            <div class="mb-3" style="margin-bottom: 20px;">
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                            </div>
                        @endif
                        @if($loop->iteration >7 && $loop->iteration <25)
                            <div class="mb-3" style="margin-bottom: 20px;">
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                            </div>
                        @endif
                        @if($loop->iteration == 25)
                            <div class="mb-3" style="margin-bottom: 20px;">
                                <small class="fa fa-star fa-1x text-primary"></small>
                                <small class="fa fa-star fa-1x text-primary"></small>
                            </div>
                        @endif
                        <p class="mb-4">{{ $about->text }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    @endforeach

@endsection