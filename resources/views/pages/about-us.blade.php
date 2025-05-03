@extends('layouts.master')

@section('title')
    About Us
@endsection

@section('css')
@endsection

@section('content')

    <!-- Service Details Section -->
    <section id="aboutUs" class="aboutUs section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>ENTERPRISE BRIEF INTRODUCTION</h4>
                    <p>
                        Established in March 2014, Kaiyi Automobile benefits from Chery Group’s experience and technology in R&D, intelligent manufacturing, quality system, supply chain system, etc., that was all accumulated in the past decades.
                        It is certified to produce both traditional and new energy vehicles.
                    </p>
                    </br>
                    <p>
                        Kaiyi Automobile produces high quality products with the support of R&D resources from all over the world, including the Turin Modeling Design Center,
                        Chery Test Technology Center, Chengdu Automobile Research Institute, and the Yibin Smart Factory.
                    </p>
                </div>

                <div class="col-lg-6" data-aos="fade-down-left" data-aos-delay="200">
                    <img src="{{ asset('assets/img/kia/2-Ara-1536x864.webp') }}" alt="" class="img-fluid services-img">
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <h4>TURIN DESIGN CENTER</h4>
                    <p>
                        With one of the most influential car designers in the world, Lowie Vermeersch, as its chief designer, leads the Italian design team and is in charge of the European modeling design center of Kaiyi Automobile..
                    </p>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <h4>CHERY TEST TECHNOLOGY CENTER</h4>
                    <p>
                        China’s largest and most advanced automotive engineering center (National Engineering Laboratory for Automotive Energy Conservation and Environmental Protection), with a center area of 300,000 square meters.                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <img src="{{ asset('assets/img/kia/about_12.jpg') }}" alt="" class="img-fluid services-img">
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>CHENGDU AUTOMOTIVE RESEARCH INSTITUTE</h4>
                    <p>
                        It has top talents in the automobile industry,
                        and a first-class team integrating R&D, design, and management.
                    </p>
                    </br>
                    <h4>YIBIN SMART FACTORY</h4>
                    <p>
                        Planned and constructed according to the industry 4.0 intelligent manufacturing standards, the first phase of the plant covers an area of 973.3 mu, and has a production capacity of 150,000 vehicles per year.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection

@section('js')
@endsection
