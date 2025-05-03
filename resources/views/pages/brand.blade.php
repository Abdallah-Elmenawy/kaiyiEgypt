@extends('layouts.master')

@section('title')
    brand - kaiyi
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="brand section light-background" id="brand">
        <div class="container text-center text-md-center py-5">
            <h1 class="display-4">Show Of The Real Me</h1>
            <p class="lead">Smart Multi Screen Suv</p>
        </div>

    </section>
    <!-- /hero Section -->
    <div class="container">
        <div class="row">

            <div class="col-lg-6 sidebar">

                <div class="brand-container" data-aos="fade-right" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Kaiyi</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="brand-container" data-aos="fade-right" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>K:   Kind Brand</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>A:   Affordable Product</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>I:   Innovative Concept</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>Y:   Young Us</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>I:   Intelligent Platform</h4>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

            <div class="col-lg-6">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-left" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/2-Ara-1536x864.webp') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                </section><!-- /Blog Details Section -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <div class="content" data-aos="fade-left" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/kia/BRAND-1.webp') }}" class="img-fluid" alt="">
                        </div><!-- End post content -->
                    </div>
                </section><!-- /Blog Details Section -->
            </div>
            <div class="col-lg-6 sidebar">

                <div class="brand-container" data-aos="fade-right" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Meaning of Brand Logo</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="brand-container" data-aos="fade-right" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h3>The V-shape stands for victory and value.
                                It shows that giving value to customers and society gives Kaiyi a meaning. 
                                The wings on the sides represent going higher and further, and show Kaiyi’s plans to 
                                do well and grow.
                            </h3>
                        </div><!-- End recent post item-->

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

            
        </div>
    </div>
@endsection

@section('js')
@endsection
