@extends('layouts.master')

@section('title')
    {{ trans('kaiyie5.title_page') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="modelsEfive section light-background" id="modelsEfive">
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
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-E5.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                </section><!-- /Blog Details Section -->
            </div>

            <div class="col-lg-6 sidebar">

                <div class="modelsEfive-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyie5.power_performance') }}</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="modelsEfive-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.power_combination') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.max_power') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.speed_analog') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.independent_suspension') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>

    <section class="modelsEfive section light-background" id="modelsEfive">
        <div class="container col-lg-6 col-md-6 text-center text-md-center py-5">
            <h2 class="section-title">{{ trans('kaiyie5.design_foucs') }}</h2>
            <p class="section-subtitle">{{ trans('kaiyie5.red_brake') }}</p>
            <p class="section-subtitle">{{ trans('kaiyie5.double_outlet') }}</p>
            <p class="section-subtitle">{{ trans('kaiyie5.daytime_lights') }}</p>
        </div>

    </section>

    <br><br>
    <section class="modelsEfiveT section light-background" id="modelsEfiveT">
        <div class="container col-lg-6 col-md-6 text-center text-md-center py-5">
            <h2 class="section-title">{{ trans('kaiyie5.feel_comfort') }}</h2>
            <p class="section-subtitle">{{ trans('kaiyie5.power_comb') }}</p>
            <p class="section-subtitle">{{ trans('kaiyie5.maximum_power') }}</p>
            <p class="section-subtitle">{{ trans('kaiyie5.led_day') }}</p>
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  sidebar">

                <div class="modelsEfive-container" data-aos="fade-left" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('kaiyie5.engine_type') }}</h3>

                    </div><!--/Search Widget -->

                </div>
            </div>
            <div class="col-lg-6">
                
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/models/Kaiyi-E5.png') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                    <div class="modelsEfive-container" data-aos="fade-right" data-aos-duration="2000">

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.displacement') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.maxhorse') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.rea_gauge') }}</h4>
                            </div><!-- End recent post item-->
    
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.curb_weight') }}</h4>
                            </div><!-- End recent post item-->
                            
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.speed_power') }}</h4>
                            </div><!-- End recent post item-->
                            
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.emission_standard') }}</h4>
                            </div><!-- End recent post item-->
                            
                            <div class="post-item">
                                <h4>{{ trans('kaiyie5.transmission') }}</h4>
                            </div><!-- End recent post item-->
    
                        </div><!--/Recent Posts Widget -->
    
                    </div>
                </section><!-- /Blog Details Section -->
                
            </div>

            <div class="col-lg-6 col-md-6 sidebar">

                <div class="modelsEfive-container" data-aos="fade-left" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.length') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.width') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.height') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.wheelbase') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.minimum') }}</h4>
                        </div><!-- End recent post item-->
                        
                        <div class="post-item">
                            <h4>{{ trans('kaiyie5.body_structure') }}</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

            
        </div>
    </div>

    <section class="modelsEfive section light-background" id="modelsEfive">
        <div class="container text-center text-md-center py-5">

        </div>

    </section>

@endsection

@section('js')
@endsection
