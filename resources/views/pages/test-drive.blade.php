@extends('layouts.master')

@section('title')
    {{ trans('test-drive.title_page') }}
@endsection

@section('css')
    <style>
        .image-option {
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .image-option.selected {
            border-color: #0d6efd;
            box-shadow: 0 0 10px rgba(13, 110, 253, 0.5);
        }

        .preview-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }
        
    </style>
@endsection

@section('content')
    <section id="tast-drive" class="tast-drive section">
        <div class="container">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">{{ trans('test-drive.title_section') }}</h4>
                    </div>
                    <div class="col-7 col-md-5">
                        <div class="text-end upgrade-btn">
                            <a href="{{ url('/' . ($page = 'home')) }}" class="btn btn-primary text-white">{{ trans('test-drive.back_home') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">

                    <!-- Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">

                            <form action="{{ route('booking.store') }}" method="POST">
                                @csrf
                                <h4>{{ trans('test-drive.personal_information') }}</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="fullName" class="form-label">{{ trans('test-drive.full_name') }}</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            placeholder="{{ trans('test-drive.enter_full_name') }}" required>
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label for="phone" class="form-label">{{ trans('test-drive.phone_number') }}</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="{{ trans('test-drive.enter_phone_number') }}" required pattern="[0-9]{10,15}">
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 form-group ">
                                        <label for="email" class="form-label">{{ trans('test-drive.email_address') }}</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="{{ trans('test-drive.enter_email') }}" required>
                                    </div>
                                </div>
                                <br><br>
                                <h4>{{ trans('test-drive.select_model') }}</h4>
                                <div class="row d-flex justify-content-center gap-3">
                                    <div class="col-md-4 form-groupimg mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            data-car-id="3"
                                            onclick="selectImage(this)" />
                                        <div class="text-center mt-2">
                                            <a href="#">X3 pro</a>
                                            <p class="text-center">{{ trans('request-quote.compact_s_advanced') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-E5.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            data-car-id="2"
                                            onclick="selectImage(this)" />
                                        <div class="text-center mt-2">
                                            <a href="#">E5</a>
                                            <p class="text-center">{{ trans('request-quote.electric_sedan') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-X7.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            data-car-id="1"
                                            onclick="selectImage(this)" />
                                        <div class="text-center mt-2">
                                            <a href="#">X7</a>
                                            <p class="text-center">{{ trans('request-quote.midsize_svu') }}</p>
                                        </div>
                                    </div>
                                    <input type="hidden" name="selected_image_id" id="selectedImageId">
                                </div>

                                <br><br>

                                <h4>{{ trans('test-drive.date_time') }}</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="date" class="form-label">{{ trans('test-drive.preferred_date') }}</label>
                                        <input type="date" class="form-control fc-datepicker" id="date" name="date" placeholder="{{ trans('test-drive.yy_dd') }}YYYY-MM-DD" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="time" class="form-label">{{ trans('test-drive.preferred_time') }}</label>
                                        <input type="time" class="form-control" id="best_time" name="best_time" required>
                                    </div>
                                </div>
                                <input type="hidden" name="car_id" id="car_id" required>
                                <br><br>

                                <h4>{{ trans('test-drive.dealership') }}</h4>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="location" class="form-label">{{ trans('test-drive.dealer_locat') }}</label>
                                        <select class="form-select" id="location" name="location" required>
                                            <option value="" disabled selected>{{ trans('test-drive.select_locat') }}</option>
                                            <option value="cairo">{{ trans('test-drive.cairo') }}</option>
                                            <option value="alexandria">{{ trans('test-drive.alexandria') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="comment" class="form-label">{{ trans('test-drive.additional_information') }}</label>
                                        <textarea name="comment" class="form-control" placeholder="{{ trans('test-drive.specific_requirements') }}"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <p>
                                            {{ trans('test-drive.booking_tast') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">{{ trans('test-drive.book_test_drive') }}</button>
                                </div>

                            </form>

                        </div>
                    </section>
                    <!-- / Form Section -->

                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function selectImage(element) {
            document.querySelectorAll('.form-groupimg .img-thumbnail').forEach(img => {
                img.classList.remove('selected');
            });

            element.classList.add('selected');

            const carId = element.getAttribute('data-car-id');
            document.getElementById('car_id').value = carId;
        }   
    </script>
    {{-- <script>
        function selectImage(element, carId) {
            // إزالة الاختيار من كل الصور
            document.querySelectorAll('.image-option').forEach(img => img.classList.remove('selected'));
            element.classList.add('selected');

            // تحديث قيمة car_id
            document.getElementById('selectedModel').value = carId;
        }
    </script> --}}
    
@endsection