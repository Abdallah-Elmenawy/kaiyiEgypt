@extends('layouts.master')

@section('title')
    Kaiyi Motor Egypt
@endsection

@section('css')
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            {{-- <div class="carousel-item active">
                <video id="heroVideo" autoplay muted loop class="d-block w-100">
                    <source src="assets/videos/hero-video.mp4" type="video/mp4">
                </video>
            </div> --}}
            <!-- End Carousel Item -->
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/1-Ar-scaled.webp') }}" alt="" class="d-block w-100">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/4.jpg') }}" alt="" class="d-block w-100">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/5.jpg') }}" alt="" class="d-block w-100">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/6.jpg') }}" alt="" class="d-block w-100">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="" class="d-block w-100">

            </div>
            <!-- End Carousel Item -->
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Check out our lineup </h2>
        </div>
        <div class="container">
            <div class="row gy-4 ">
                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="600">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <img src="{{ asset('assets/img/hero-carousel/1627442051180.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . $page='Kaiyi-X-3-Pro') }}" class="stretched-link">
                            <h3>Kaiyi X3 Pro</h3>
                        </a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <img src="{{ asset('assets/img/hero-carousel/1639473877768.png') }}" alt="" class="d-block ">
                        </div>
                        <a href="{{ url('/' . $page='Kaiyi-E-5') }}" class="stretched-link">
                            <h3>Kaiyi E5</h3>
                        </a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <img src="{{ asset('assets/img/hero-carousel/1692239206534-1.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . $page='Kaiyi-X-7') }}" class="stretched-link">
                            <h3>Kaiyi X7</h3>
                        </a>
                    </div>
                </div>
                <!-- End Service Item -->

            </div>

        </div>

    </section>
    <!-- /Services Section -->
    <!-- hero Section -->
    <section class="hero-section">
        <div class="container text-center text-md-start py-5">
            <div class="content-wrapper">
                <p class="lead-text">Whenever and wherever, the strong power is always ready for your trip.</p>
                <h2 class="product-title">KAIYI <span>X7</span></h2>
                <div class="button-group">
                    <a href="{{ url('/' . $page='test-drive') }}" class="btn btn-primary">Book a Test Drive</a>
                    <a href="#" class="btn btn-light">Download Specification</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero Section -->
    <!-- Options Section -->
    <section id="service" class="service section light-background">
        <div class="content-wrapper">
            <p class="lead-text">Get more from Kaiyi</p>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/1.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . $page='test-drive') }}" class="stretched-link">
                            <h3>Book a test drive </h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/2.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . $page='service-booking') }}" class="stretched-link">
                            <h3>Service Centre</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/3.png') }}" alt="" class="d-block">
                        </div>
                        <a href="{{ url('/' . $page='request-quote') }}" class="stretched-link">
                            <h3>Request a quote</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <div class="icon">
                            <img  src="{{ asset('assets/img/icon/4.jpg') }}" alt="" class="d-block">
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Book a service</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
            </div>
            <div class="content-wrapper">
                <p class="lead-text">We Are <span>Kaiyi</span></p>
            </div>
            <div class="copyright text-center mt-4">
                <span></span>
                <p>We specialize in delivering intelligent products that are backed by an ongoing commitment to
                    technological innovation.</p>
            </div>
            <div class="button-group">
                <a href="{{ url('/' . $page='test-drive') }}" class="btn btn-primary">Book a Test Drive</a>
            </div>
        </div>
    </section>
    <!-- /Options Section -->
    <!-- hero Section -->
    <section class="hero-section">
        <div class="container text-center text-md-start py-5">
            <div class="content-wrapper">
                <p class="lead-text">KUNPENG POWER, PASSIONATELY DRIVE</p>
                <h2 class="product-title">Whenever and wherever, the strong power is always ready for your trip.</h2>
            </div>
        </div>
    </section>
    <!-- /hero Section -->
@endsection

@section('js')
@endsection
