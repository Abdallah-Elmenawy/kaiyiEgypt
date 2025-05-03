@extends('layouts.master')

@section('title')
    form Page
@endsection

@section('css')
@endsection

@section('content')
    <!-- Hero Section -->
<!-- Main Form Section -->
    <section class="form-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center mb-4">Request a Test Drive</h3>
                        <form id="testDriveForm" action="#" method="POST">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" required/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required/>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required/>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" required/>
                            </div>
                            <div class="mb-3">
                                <label for="model" class="form-label">Preferred Model</label>
                                <select class="form-select" id="model" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Model A">Model A</option>
                                    <option value="Model B">Model B</option>
                                    <option value="Model C">Model C</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" required/>
                            </div>
                            <div class="mb-3">
                                <label for="comments" class="form-label">Comments (Optional)</label>
                                <textarea class="form-control" id="comments" rows="3"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info mt-4 text-center">
                        <p><strong>For any inquiries:</strong></p>
                        <p>Email: info@kaiyi.ae | Phone: +971 50 123 4567</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero Section -->
@endsection

@section('js')
@endsection
