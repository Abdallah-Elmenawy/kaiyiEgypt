@extends('layouts.master')

@section('title')
    {{ trans('brand.title_page') }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="brand section light-background" id="brand">
        <div class="container text-center text-md-center py-5">
            <h1 class="display-4">{{ trans('brand.show_real') }}</h1>
            <p class="lead">{{ trans('brand.smart_multi') }}</p>
        </div>

    </section>
    <!-- /hero Section -->
    <div class="container">
        <div class="row">

            <div class="col-lg-6 sidebar">

                <div class="brand-container" data-aos="fade-right" data-aos-duration="1000">


                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">{{ trans('brand.widger_kaiyi') }}</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="brand-container" data-aos="fade-right" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h4>{{ trans('brand.kind_brand') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('brand.affordable_product') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('brand.innovative_concept') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>{{ trans('brand.young_us') }}</h4>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                            <h4>   {{ trans('brand.intelligent_platfrom') }}</h4>
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

                        <h3 class="widget-title">{{ trans('brand.brand_logo') }}</h3>

                    </div><!--/Search Widget -->

                </div>

                <div class="brand-container" data-aos="fade-right" data-aos-duration="2000">

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <div class="post-item">
                            <h3>{{ trans('brand.shape_stand') }}
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
