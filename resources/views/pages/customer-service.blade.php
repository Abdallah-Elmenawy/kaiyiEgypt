@extends('layouts.master')

@section('title')
    Customer-support
@endsection

@section('css')
@endsection

@section('content')
    <!-- hero Section -->
    <section class="hero-section">
        <div class="container text-center text-md-start py-5">
        </div>
    </section>
    <!-- /hero Section -->
    <!-- Options Section -->
    <section id="service" class="service section light-background">
        <div class="content-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 600 600">
                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
            </svg>
            <p class="lead-text">{{ trans('customer-service.customer_service') }}</p>
        </div>
        
        <div class="copyright text-center mt-4">
            <p class="pargraph">{{ trans('customer-service.pragraph_committed') }}</p>
        </div>
        
    </section>
    <!-- /Options Section -->

@endsection

@section('js')
@endsection
