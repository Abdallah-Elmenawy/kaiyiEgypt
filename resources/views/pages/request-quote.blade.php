@extends('layouts.master')

@section('title')
    Request For Quote - kaiyi
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
                        <h4 class="page-title">Request Quote Now</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-6">

                    <!-- Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">

                            <form action="">

                                <h4>Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName"
                                            placeholder="Enter your full name" required>
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Enter your phone number" required>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6 form-group ">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email address" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="fullName" class="form-label">Your location</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName"
                                            placeholder="Enter your location" required>
                                    </div>
                                </div>
                                <br><br>
                                <h4>Select Your Model</h4>
                                <div class="row d-flex justify-content-center ">
                                    <div class="col-md-4 form-groupimg gap-3 mb-4">
                                        <img src="{{ asset('assets/img/hero-carousel/1627442051180.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            onclick="selectImage(this, '{{ asset('assets/img/hero-carousel/1627442051180.png') }}')" />
                                        <div class="text-center mt-2">
                                            <a href="#">X3 Pro</a>
                                            <p class="text-center">Compact SUV with advanced tech</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg gap-3 mb-4">
                                        <img src="{{ asset('assets/img/hero-carousel/1639473877768.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            onclick="selectImage(this, '{{ asset('assets/img/hero-carousel/1639473877768.png') }}')" />
                                        <div class="text-center mt-2">
                                            <a href="#">E5</a>
                                            <p class="text-center">Electric sedan with eco-friendly design</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-groupimg gap-3 mb-4">
                                        <img src="{{ asset('assets/img/hero-carousel/1692239206534-1.png') }}" alt=""
                                            class="image-option img-thumbnail"
                                            onclick="selectImage(this, '{{ asset('assets/img/hero-carousel/1692239206534-1.png') }}')" />
                                        <div class="text-center mt-2">
                                            <a href="#">X7</a>
                                            <p class="text-center">Premium midsize SUV with luxury features</p>
                                        </div>
                                    </div>

                                </div>

                                <br><br>

                                <h4>Best Time to Connect & Additional Information</h4>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="location" class="form-label">Best Time to Connect</label>
                                        <select class="form-select" id="location" name="location" required>
                                            <option value="" disabled selected>Select your preferred time</option>
                                            <option value="morning">Morning (9 Am - 12 PM)</option>
                                            <option value="afternoon">Afternoon (12 Am - 4 PM)</option>
                                            <option value="evening">Evening (4 PM - 7 PM)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="comment" class="form-label">Additional Information (Optional)</label>
                                        <textarea name="comment" class="form-control" placeholder="Any specific requirements or questions?"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <p>By submitting this form, you agree to be contacted by our sales team. 
                                            Your information will be processed according to our privacy policy.</p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Request Quote</button>
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
        // إزالة التحديد من كل الصور
        document.querySelectorAll('.form-groupimg .img-thumbnail').forEach(img => {
            img.classList.remove('selected');
        });

        // وضع التحديد على الصورة المختارة
        element.classList.add('selected');

        // تحديث الصورة المعروضة
        const preview = document.getElementById('selectedImage');
        preview.src = imageUrl;
        preview.style.display = 'block';
    }
</script>
@endsection
