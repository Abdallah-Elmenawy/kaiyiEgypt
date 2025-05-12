<!-- Footer opened -->
<footer id="footer" class="footer dark-background">
    <div class="container copyright text-center mt-4"></div>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-2 col-md-2 footer-links">
                <h4>{{ trans('footer.titlemodel') }}</h4>
                <ul>
                    <li><a href="{{ url('/' . $page='Kaiyi-X-3') }}">{{ trans('footer.Kaiyi3') }}</a></li>
                    <li><a href="{{ url('/' . $page='Kaiyi-X-3-Pro') }}">{{ trans('footer.Kaiyi3Pro') }}</a></li>
                    <li><a href="{{ url('/' . $page='Kaiyi-E-5') }}">{{ trans('footer.KaiyiE5') }}</a></li>
                    <li><a href="{{ url('/' . $page='Kaiyi-X-7') }}">{{ trans('footer.KaiyiX7') }}</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-2 footer-links">
                <h4>{{ trans('footer.titlebrand') }}</h4>
                <ul>
                    <li><a href="{{ url('/' . $page='brand') }}">{{ trans('footer.brand') }}</a></li>
                    <li><a href="{{ url('/' . $page='service-booking') }}">{{ trans('footer.service_booking') }}</a></li>
                    <li><a href="{{ url('/' . $page='about-us') }}">{{ trans('footer.about') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 footer-links">
                <h4>{{ trans('footer.titleAbout') }}</h4>
                <ul>
                    <li><a href="{{ url('/' . $page='about-us') }}">{{ trans('footer.introduction') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 footer-links">
                <h4>{{ trans('footer.SpeedDial') }}</h4>
                <ul>
                    <li><a href="#">{{ trans('footer.address') }}</a></li>
                    <li><a href="#">{{ trans('footer.working') }}</a></li>
                    <li><a href="#">{{ trans('footer.phone') }}</a></li>
                    <li><a href="#">{{ trans('footer.mail') }}</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>{{ trans('footer.connect_with_us') }}</h4>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/share/12LRS6hhDWw/"target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/kaiyi.motors.egypt?igsh=ZXZpYWNpM3A0ZzFn"target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{ url('/' . ($page = 'home')) }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ url('/' . ($page = 'home')) }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.tiktok.com/@kaiyi.motors.egypt" target="_blank"><i class="bi bi-tiktok"></i></a>
                </div>

            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>{{ trans('footer.privacy_policy') }} | <!--<span>Copyright</span> <strong class="px-1 sitename">Company</strong>--> 
            <span>
                {{ trans('footer.all_rights_reserved') }}
            </span>
        </p>
        <!-- <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
            </div> -->
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>
<!-- Footer closed -->
