@extends('layouts.master')

@section('title')
        {{ trans('request-quote.title_page') }}
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
    <section id="request-quote" class="request-quote section">
        <div class="container">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">{{ trans('request-quote.installment_payments') }}</h4>
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
                            <form action="{{ route('installment.store') }}" method="POST">
                                @csrf

                                <h4>{{ trans('request-quote.personal_information') }}</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="fullName" class="form-label">{{ trans('request-quote.full_name') }}</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            placeholder="{{ trans('request-quote.plac_enter_full_name') }}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="phone" class="form-label">{{ trans('request-quote.phone_number') }}</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="{{ trans('request-quote.plac_enter_number') }}" required pattern="[0-9]{10,15}">
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 form-group">
                                        <label for="email" class="form-label">{{ trans('request-quote.email_address') }}</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="{{ trans('request-quote.enter_email_address') }}" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="location" class="form-label">{{ trans('request-quote.your_location') }}</label>
                                        <input type="text" class="form-control" id="location" name="location" placeholder="{{ trans('request-quote.enter_location') }}" required>
                                    </div>
                                </div>
                                <br><br>
                                <h4>{{ trans('request-quote.select_model') }}</h4>
                                <div class="row d-flex justify-content-center gap-3">
                                    <div class="col-md-4 form-groupimg gap-4 mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            data-car-id="1"
                                            onclick="selectImage(this)" />
                                        <div class="text-center mt-2">
                                            <a href="#">X3 Pro</a>
                                            <p class="text-center">{{ trans('request-quote.compact_s_advanced') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg gap-4 mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-E5.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            data-car-id="1"
                                            onclick="selectImage(this)" />
                                        <div class="text-center mt-2">
                                            <a href="#">E5</a>
                                            <p class="text-center">{{ trans('request-quote.electric_sedan') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg gap-4 mb-4">
                                        <img src="{{ asset('assets/img/kia/models/Kaiyi-X7.png') }}" alt=""
                                            data-car-id="1"
                                            onclick="selectImage(this)"
                                            class="image-option img-thumbnail" />
                                        <div class="text-center mt-2">
                                            <a href="#">X7</a>
                                            <p class="text-center">{{ trans('request-quote.midsize_svu') }}</p>
                                        </div>
                                        <input type="hidden" name="car_id" id="car_id">
                                    </div>

                                </div>

                                <br><br>

                                <h4>{{ trans('request-quote.calculation_information') }}</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="carPrice" class="form-label">{{ trans('request-quote.total_car') }}</label>
                                        <input type="number" class="form-control" id="carPrice" name="car_price" placeholder="{{ trans('request-quote.enter_car') }}" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group">
                                        <label for="months" class="form-label">{{ trans('request-quote.number_of_month') }}</label>
                                        <select class="form-select" id="months" name="months" required>
                                            <option value="" disabled selected>{{ trans('request-quote.enter_number_of_month') }}</option>
                                            <option value="10">{{ trans('request-quote.tenmonth') }}</option>
                                            <option value="20">{{ trans('request-quote.twomonth') }}</option>
                                            <option value="30">{{ trans('request-quote.thrmonth') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <label for="comment" class="form-label">{{ trans('request-quote.additional_information') }}</label>
                                        <textarea name="comment" class="form-control" placeholder="{{ trans('request-quote.specific_requirements') }}"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col form-group">
                                        <p>
                                            {{ trans('request-quote.p_submitting') }}
                                            </p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">{{ trans('request-quote.request') }}</button>
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
        function selectImage(element, imageUrl) {
            document.querySelectorAll('.form-groupimg .img-thumbnail').forEach(img => {
                img.classList.remove('selected');
            });

            element.classList.add('selected');

            const preview = document.getElementById('selectedImage');
            preview.src = imageUrl;
            preview.style.display = 'block';
        }
    </script>
    <script>
        const carPriceInput = document.getElementById('carPrice');
        const downPaymentInput = document.getElementById('downPayment');
        const monthsInput = document.getElementById('months');
        const monthlyInstallmentInput = document.getElementById('monthlyInstallment');

        function calculateInstallment() {
            const price = parseFloat(carPriceInput.value) || 0;
            const down = parseFloat(downPaymentInput.value) || 0;
            const months = parseInt(monthsInput.value) || 0;
            const interestRate = 0.10;

            if (months > 0 && price >= down) {
                const remaining = price - down;
                const totalWithInterest = remaining + (remaining * interestRate);
                const monthly = totalWithInterest / months;
                monthlyInstallmentInput.value = monthly.toFixed(2) + ' EGP';
            } else {
                monthlyInstallmentInput.value = '';
            }
        }

        carPriceInput.addEventListener('input', calculateInstallment);
        downPaymentInput.addEventListener('input', calculateInstallment);
        monthsInput.addEventListener('input', calculateInstallment);
    </script>
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
    
@endsection
