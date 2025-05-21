@extends('layouts.master')

@section('title')
    {{ trans('kaiyiX7.title_page') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section X7 -->
    <section class="modelsxseven section light-background" id="modelsxseven">
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
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-X7.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                </section><!-- /Blog Details Section -->
            </div>

            <div class="col-lg-6 sidebar">

                <div class="modelsxseven-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyiX7.exterior_fashion') }}</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="modelsxseven-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.intelligent_cockpit') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.floating_roof') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.led_chmsl') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.two_tone') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.tailgate_light') }}</h4>
                        </div><!-- End recent post item-->
                        
                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.wingspan_front') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>

    <section class="modelsxseven section light-background" id="modelsxthteer">
        <div class="container col-lg-6 col-md-6 text-center text-md-center py-5">
            <h2 class="section-title">{{ trans('kaiyiX7.full_comfort') }}</h2>
            <p class="section-subtitle">{{ trans('kaiyiX7.space_capsule') }}</p>
            <p class="section-subtitle">{{ trans('kaiyiX7.lights') }}</p>
            <p class="section-subtitle">{{ trans('kaiyiX7.easy_drive') }}</p>
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  sidebar">

                <div class="modelsxseven-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyiX7.configuration_table') }}</h3>

                    </div><!--/Search Widget -->

                </div>
            </div>
            <div class="col-lg-6">
                
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-X7.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                    <div class="modelsxseven-container" data-aos="fade-right" data-aos-duration="2000">

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.fuel_tank') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.displacement') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.minimum_power') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.engine_speed') }}</h4>
                            </div><!-- End recent post item-->
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.emission') }}</h4>
                            </div><!-- End recent post item-->
                            <div class="post-item">
                                <h4>{{ trans('kaiyiX7.transmission') }}</h4>
                            </div><!-- End recent post item-->
    
                        </div><!--/Recent Posts Widget -->
    
                    </div>
                </section><!-- /Blog Details Section -->
                
            </div>

            <div class="col-lg-6 col-md-6 sidebar">

                <div class="modelsxseven-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.length') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.Width') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.seat_number') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.Front_Rear') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.minimum_clearanc') }}</h4>
                        </div><!-- End recent post item-->
                        
                        <div class="post-item">
                            <h4>{{ trans('kaiyiX7.body_sturcture') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

            
        </div>
    </div>

    <section class="modelsxsevenFo section light-background" id="modelsxthteer">
        <div class="container text-center text-md-center py-5">

        </div>

    </section>

@endsection

@section('js')
@endsection
