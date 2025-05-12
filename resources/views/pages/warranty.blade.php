@extends('layouts.master')

@section('title')
    warranty - kaiyi
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="warranty section light-background" id="warranty">
        <div class="container text-center text-md-center py-5">
            <h1 class="display-4">{{ trans('warranty.warrantyone') }}</h1>

    </section>
    <!-- /hero Section -->

    <!-- Features Section -->
    <section id="warantycontent" class="warantycontent section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ trans('warranty.warrantytwo') }}</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item ramd">
                        <h3> {{ trans('warranty.complate_vahicle') }}<br> {{ trans('warranty.other_parts') }} </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item black">
                        <h3>
                            {{ trans('warranty.whole_vehicle') }}
                        </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item ramd">
                        <h3>{{ trans('warranty.fiveyears') }} <br> {{ trans('warranty.theyear') }} </h3>
                    </div>
                </div><!-- End Feature Item -->
            </div>

            </br>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item ramd">
                        <h3>{{ trans('warranty.vulener') }} <br> {{ trans('warranty.consuma') }} </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item black">
                        <h3>
                            {{ trans('warranty.spak_plugs') }}
                        </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item ramd">
                        <h3>{{ trans('warranty.three_month') }} <br></h3>
                    </div>
                </div><!-- End Feature Item -->
            </div>

            </br>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item ramd">
                        <h3>{{ trans('warranty.other_detail') }} <br> </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item black">
                        <h3>
                            {{ trans('warranty.glass_light') }}
                        </h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item ramd">
                        <h3>{{ trans('warranty.cover_under') }}<br> </h3>
                    </div>
                </div><!-- End Feature Item -->
            </div>


        </div>

    </section>
    <!-- /Features Section -->
@endsection

@section('js')
@endsection
