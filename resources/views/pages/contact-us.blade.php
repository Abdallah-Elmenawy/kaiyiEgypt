@extends('layouts.master')

@section('title')
    contact us - kaiyi
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="contacthero section" id="contactUs">
        <div class="container text-center text-md-center py-5">
            <h1 class="display-4">{{ trans('contact-us.here_for_you') }}</h1>
            <p>
                {{ trans('contact-us.kaiyi_value') }}
            </p>
        </div>
    </section>
    <!-- /hero Section -->

    <!-- Features Section -->
    <section id="contactUs" class="contactUs section">
        <div class="container">
            <div class="section-header text-center">
                <h2>{{ trans('contact-us.get_touch') }}</h2>
            </div>
            {{-- <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-blue position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Showroom # S02</h3>
                        </a>
                        <p>Al Khoory Sky Garden,Al Maktoum Road, Port Saeed,Deira, Dubai, UAE</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Phone</h3>
                        </a>
                        <p>+971 43295749</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Email</h3>
                        </a>
                        <p>sales@kaiyi.ae</p>
                    </div>
                </div><!-- End Service Item -->


            </div> --}}

        </div>
    </section>
    <!-- /Features Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade">
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen="">
                </iframe>
            </div>
            <div class="row gy-5 gx-lg-5">

                <div class="col-lg-4">

                    <div class="info">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>{{ trans('contact-us.location') }}</h4>
                                <p>{{ trans('contact-us.location_title') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>{{ trans('contact-us.email') }}</h4>
                                <p>{{ trans('contact-us.email_contant') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>{{ trans('contact-us.phone') }}</h4>
                                <p>{{ trans('contact-us.phone_number') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="{{ route('contact-us.store') }}" method="POST" role="form" class="email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="{{ trans('contact-us.your_name') }}" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ trans('contact-us.your_email') }}" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ trans('contact-us.subject') }}"
                                required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="{{ trans('contact-us.massage') }}" required=""></textarea>
                        </div>
                        <div class="my-3">
                            @if(session('success'))
                                <div class="sent-message">{{ session('success') }}</div>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">{{ trans('contact-us.send_massage') }}</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

@section('js')
@endsection
