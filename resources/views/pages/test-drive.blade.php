@extends('layouts.master')

@section('title')
    Booking Test Drive - kaiyi
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
                        <h4 class="page-title">Booking Test Drive</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/' . ($page = 'home')) }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Booking Test Drive</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 col-md-5">
                        <div class="text-end upgrade-btn">
                            <a href="{{ url('/' . ($page = 'home')) }}" class="btn btn-primary text-white">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div class="col-12">    
                <div class="card">
                    <div class="card-body">
                        <div class="col-5">
                            <h4 class="page-title">Booking Test Drive</h4>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/' . $page='home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking Test Drive</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="text-end upgrade-btn">
                                <a href="{{ url('/' . $page='home') }}" class="btn btn-primary text-white">Back to Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Booking Test Drive</h4>
                        <h6 class="card-subtitle">Fill the form below to book a test drive</h6>
                        <form class="form-horizontal mt-4" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 text-end control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="model_id" class="col-sm-3 text-end control-label col-form-label">Model</label>
                                <div class="col-sm-9">
                                    <select name="model_id" id="" class="form-select shadow-none form-control-line">
                                        @foreach ($models as $model)
                                            <option value="{{ $model->id }}">{{ $model->name }}</option>    
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type='date' name='date' id='date' class='form-control' required />
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ url('/' . $page='home') }}" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Book Test Drive</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
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

                                <h4>Choose Date & Time</h4>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="date" class="form-label">Preferred Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="time" class="form-label">Preferred Time</label>
                                        <input type="time" class="form-control" id="time" name="time" required>
                                    </div>
                                </div>

                                <br><br>

                                <h4>Dealership & Additional Information</h4>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="location" class="form-label">Dealership Location</label>
                                        <select class="form-select" id="location" name="location" required>
                                            <option value="" disabled selected>Select your location</option>
                                            <option value="cairo">Cairo</option>
                                            <option value="alexandria">Alexandria</option>
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
                                        <p>By booking this test drive, you agree to our terms and conditions. You can
                                            reschedule or cancel your test drive up to 24 hours before the appointment.</p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Book Test drive</button>
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
