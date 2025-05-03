
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10">
                    <form action="" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center"><button type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->