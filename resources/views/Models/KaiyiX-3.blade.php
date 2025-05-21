@extends('layouts.master')

@section('title')
    {{ trans('kaiyiX3.title_page') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="modelsxthteer section light-background" id="modelsxthteer">
        <div class="container text-center text-md-center py-5">
        </div>
    </section>
    <!-- /hero Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                </section><!-- /Blog Details Section -->
            </div>

            <div class="col-lg-6 sidebar">

                <div class="modelsxthteer-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyiX3.exterior_fashion') }}</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="modelsxthteer-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.intelligent_cockpit') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.floating_roof') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.led_chmsl') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.two_tone') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.tailgate_light') }}</h4>
                        </div><!-- End recent post item-->
                        
                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.wingspan_front') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>

    <section class="modelsxthteer section light-background" id="modelsxthteer">
        <div class="container col-lg-6 col-md-6 text-center text-md-center py-5">
            <h2 class="section-title">{{ trans('kaiyiX3.comfort_more') }}</h2>
            <p class="section-subtitle">{{ trans('kaiyiX3.seat_split') }}</p>
            <p class="section-subtitle">{{ trans('kaiyiX3.flexible_storage') }}</p>
            <p class="section-subtitle">{{ trans('kaiyiX3.super_long') }}</p>
            <p class="section-subtitle">{{ trans('kaiyiX3.luxury_panels') }}</p>
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  sidebar">

                <div class="modelsxthteer-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyiX3.configuration_table') }}</h3>

                    </div><!--/Search Widget -->

                </div>
            </div>
            <div class="col-lg-6">
                
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                    <div class="modelsxthteer-container" data-aos="fade-right" data-aos-duration="2000">

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX3.length_wight_height') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4> {{ trans('kaiyie5.wheelbase') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX3.minimum_ground') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX3.body_structures') }}</h4>
                            </div><!-- End recent post item-->
    
                        </div><!--/Recent Posts Widget -->
    
                    </div>
                </section><!-- /Blog Details Section -->
                
            </div>

            <div class="col-lg-6 col-md-6 sidebar">

                <div class="modelsxthteer-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.seat_number') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.fuel_tank') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.engine_type') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.displacement') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.maximum_horsepower') }}</h4>
                        </div><!-- End recent post item-->
                        
                        <div class="post-item">
                            <h4>{{ trans('kaiyiX3.maximum_power') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

            
        </div>
    </div>

    <section class="modelsxthteer section light-background" id="modelsxthteer">
        <div class="container text-center text-md-center py-5">

        </div>

    </section>

@endsection

@section('js')
@endsection
