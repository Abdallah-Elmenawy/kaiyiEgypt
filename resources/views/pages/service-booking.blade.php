@extends('layouts.master')

@section('title')
    service-booking - kaiyi
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
                        <h3><span> Service</span> Booking</h3>
                        <P>At Kaiyi, we understand the importance of keeping your car in top-notch condition.
                            That’s why we have streamlined our service booking process to ensure it’s as convenient as
                            possible
                            for our valued customers. Whether it’s regular maintenance, a minor repair,
                            or a comprehensive service, booking an appointment with us is quick, easy, and hassle-free.</P>
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

                <div class="col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <form action="#" method="" class="email-form">
                        <div class="row">
                            
                            <div class="col-md-6 form-group">
                                <label class="label">Full Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Type your full name" autocomplete="off" required="">
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">Phone</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Type your phone" autocomplete="off" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label" for="carModel">Select car model</label>
                                <select class="form-control" name="carModel" id="carModel" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="toyota">X-3</option>
                                    <option value="honda">X-3 pro</option>
                                    <option value="ford">X-7</option>
                                    <!-- يمكنك إضافة المزيد من الخيارات حسب الحاجة -->
                                </select>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">Date</label>
                                <input type="date" class="form-control" name="date" id="date" autocomplete="off" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label class="label">Number Plate</label>
                                <input type="number" class="form-control" name="number" id="number" placeholder="Type here" autocomplete="off" required>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit">Enquire Now</button>
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
                        <h3><span> Service</span> Center</h3>
                    </div>
                </div><!-- End Feature -->

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-automobile">
                        <h2>Legend World Automobile Service</h2>
                        <P>Al Quoz- Industrial Area 2- Dubai, United Arab Emirates</P>
                        <h4>Email : Service@kaiyi.ae</h4>
                    </div>
                    <br/>
                    <div class="feature-automobile">
                        <img src="{{ asset('assets/img/kia/Untitled-design-64-1.jpg') }}" alt="" class="img-fluid services-img">
                    </div>
                </div><!-- End Feature -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-5">
                        <iframe style="width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
                    </div><!-- End Google Maps -->
                </div><!-- End Feature -->
            </div>

        </div>
    </section>
    <!-- /Service Center Section -->
@endsection

@section('js')
@endsection
