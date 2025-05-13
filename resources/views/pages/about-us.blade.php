@extends('layouts.master')

@section('title')
    {{ trans('about.title_page') }}
@endsection

@section('css')
@endsection

@section('content')

    <!-- Service Details Section -->
    <section id="aboutUs" class="aboutUs section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>{{ trans('about.entrerprise_prief') }}</h4>
                    <p>
                        {{ trans('about.Kaiyi_Automobile_benefits') }}
                    </p>
                    </br>
                    <p>
                        {{ trans('about.kaiyi_automobile_produces') }}
                    </p>
                </div>

                <div class="col-lg-6" data-aos="fade-down-left" data-aos-delay="200">
                    <img src="{{ asset('assets/img/kia/2-Ara-1536x864.webp') }}" alt="" class="img-fluid services-img">
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ trans('about.turin_design') }}</h4>
                    <p>
                        {{ trans('about.influential_car_designers') }}
                    </p>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <h4>{{ trans('about.chery_technology') }}</h4>
                    <p>
                        {{ trans('about.advanced_automotive') }}
                </div>
                <div class="col-lg-6" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <img src="{{ asset('assets/img/kia/about_12.jpg') }}" alt="" class="img-fluid services-img">
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>{{ trans('about.chengdu_automotive') }}</h4>
                    <p>
                        {{ trans('about.automobile_industry') }}
                    </p>
                    </br>
                    <h4>{{ trans('about.yibin_factory') }}</h4>
                    <p>
                        {{ trans('about.planned_constructed') }}
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection

@section('js')
@endsection
