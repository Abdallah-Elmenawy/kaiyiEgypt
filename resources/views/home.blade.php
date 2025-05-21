@extends('layouts.master')

@section('title')
    {{ trans('home.title_home') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="hero-carousel">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('assets/videos/hero-video.webm') }}" type="video/webm">
                <source src="{{ asset('assets/videos/hero-video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ trans('home.check') }}</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                @foreach ($cars as $car)
                    <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="600">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <img src="{{ asset(json_decode($car->img)[0]) }}"
                                    alt="{{ json_decode($car->name)->{app()->getLocale()} }}" class="d-block">
                            </div>

                            <a href="{{ url('/home/' . $car->slug) }}" class="stretched-link">
                                <h3>{{ json_decode($car->name)->{app()->getLocale()} }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <!-- /Services Section -->
    <!-- hero Section -->
    <section class="hero-section">
        <div class="container text-center text-md-start py-5">
            <div class="content-wrapper">
                <p class="lead-text">{{ trans('home.lead_text1') }}</p>
                {{-- <h2 class="product-title">
                    {{ trans('home.product_title1') }}<span> {{ trans('home.product_titleX7') }}</span>
                </h2> --}}
                <div class="button-group">
                    <a href="{{ url('/' . ($page = 'test-drive')) }}"
                        class="btn btn-primary">{{ trans('home.Book_Test_Drive') }}</a>
                    <a href="{{ url('/' . ($page = 'test-drive')) }}" class="btn btn-light">{{ trans('home.Download_Specification') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero Section -->
    <!-- Options Section -->
    <section id="service" class="service section light-background">
        <div class="content-wrapper">
            <p class="lead-text">{{ trans('home.Get_Kaiyi') }}</p>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/1.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . ($page = 'test-drive')) }}" class="stretched-link">
                            <h3> {{ trans('home.Book_drive') }}</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/2.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . ($page = 'service-booking')) }}" class="stretched-link">
                            <h3>{{ trans('home.Service_Centre') }}</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/3.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . ($page = 'request-quote')) }}" class="stretched-link">
                            <h3>{{ trans('home.Request_quote') }}</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/4.jpg') }}" alt="" class="d-block">
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ trans('home.Book_a_service') }}</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
            </div>
            <div class="content-wrapper">
                <p class="lead-text">{{ trans('home.we_are') }} <span>{{ trans('home.Kaiyi') }}</span></p>
            </div>
            <div class="copyright text-center mt-4">
                <span></span>
                <p>{{ trans('home.specialize_delivering') }}</p>
            </div>
            <div class="button-group">
                <a href="{{ url('/' . ($page = 'test-drive')) }}"
                    class="btn btn-primary">{{ trans('home.BookTestDrive') }}</a>
            </div>
        </div>
    </section>
    <!-- /Options Section -->
    <!-- hero Section -->
    <section class="hero-section">
        <div class="container text-center text-md-start py-5">
            <div class="content-wrapper">
                <p class="lead-text">{{ trans('home.PASSIONATELY_DRIVE') }}</p>
                {{-- <h2 class="product-title">{{ trans('home.strong_power') }}</h2> --}}
            </div>
        </div>
    </section>
    <!-- /hero Section -->
@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.querySelector('#hero-carousel');
        const video = document.querySelector('#heroVideo');

        carousel.addEventListener('slid.bs.carousel', function () {
            const activeItem = carousel.querySelector('.carousel-item.active');

            if (activeItem.contains(video)) {
                video.currentTime = 0;
                video.play().catch(error => {
                    console.warn("Video play error", error);
                });
            } else {
                video.pause();
            }
        });
    });
</script>
@endsection

