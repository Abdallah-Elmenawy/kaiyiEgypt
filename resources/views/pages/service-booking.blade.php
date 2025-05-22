@extends('layouts.master')

@section('title')
    {{ trans('service-booking.title_service') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- Service Booking Section -->
    <section id="service-booking" class="service-booking section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-service">
                        <h3><span>{{ trans('service-booking.service') }}</span> {{ trans('service-booking.booking') }}</h3>
                        <P>
                            {{ trans('service-booking.kaiyi_understsand') }} 
                        </P>
                    </div>
                </div><!-- End Feature -->
            </div>

        </div>

    </section>
    <!-- /Service Booking Section -->
    <!-- Service Form Section -->
    <section id="service-booking" class="service-booking section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
                    <img src="{{ asset('assets/img/kia/car.jpg') }}" alt="" class="img-fluid services-img">
                </div><!-- End Feature -->

                <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="{{ route('servic-booking.store') }}" method="POST" class="email-form">
                        @csrf
                        <div class="row">
                            
                            <div class="col-md-6 form-group">
                                <label class="label">{{ trans('service-booking.full_name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ trans('service-booking.type_full_name') }}" autocomplete="off" required="">
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">{{ trans('service-booking.phone') }}</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="{{ trans('service-booking.type_your_phone') }}" autocomplete="off" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">{{ trans('service-booking.email') }}</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{ trans('service-booking.email') }}" autocomplete="off" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label" for="carModel">{{ trans('service-booking.select_car_model') }}</label>
                                <select class="form-control" name="car_id" id="carModel" required>
                                    <option value="" disabled selected>{{ trans('service-booking.select') }}</option>
                                    <option value=4>{{ trans('service-booking.x3') }}</option>
                                    <option value=3>{{ trans('service-booking.x3pro') }}</option>
                                    <option value=2>{{ trans('service-booking.x3pro') }}</option>
                                    <option value=1>{{ trans('service-booking.x7') }}</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">{{ trans('service-booking.date') }}</label>
                                <input type="date" class="form-control" name="date" id="date" autocomplete="off" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">{{ trans('service-booking.number_plate') }}</label>
                                <input type="number" class="form-control" name="number_plate" id="number" placeholder="{{ trans('service-booking.type_here_numper') }}" autocomplete="off" required>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit">{{ trans('service-booking.enquire_now') }}</button>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>

        </div>

    </section>
    <!-- /Service Form Section -->
    <!-- Service Center Section -->
    <section id="service-booking" class="service-booking section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-service">
                        <h3><span>{{ trans('service-booking.service_bottom') }}</span> {{ trans('service-booking.center') }}</h3>
                    </div>
                </div><!-- End Feature -->

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-automobile">
                        <h2>{{ trans('service-booking.legend_automobile') }}</h2>
                        <P>{{ trans('service-booking.title') }}</P>
                        <h4>{{ trans('service-booking.email_ser') }}</h4>
                    </div>
                    <br/>
                    <div class="feature-automobile">
                        <img src="{{ asset('assets/img/kia/Untitled-design-64-1.jpg') }}" alt="" class="img-fluid services-img">
                    </div>
                </div><!-- End Feature -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-5">
                        <iframe style="width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89326.10872107957!2d31.103835199999992!3d30.087977800000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b8874980765%3A0x17bcfe9a386bd547!2sKia%20Egypt%20-%20Abu%20Rawash!5e1!3m2!1sar!2seg!4v1747170728693!5m2!1sar!2seg" frameborder="0" allowfullscreen=""></iframe>
                    </div><!-- End Google Maps -->
                </div><!-- End Feature -->
            </div>

        </div>
    </section>
    <!-- /Service Center Section -->
@endsection

@section('js')
@endsection
