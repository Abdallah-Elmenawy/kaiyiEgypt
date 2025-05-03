<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ url('/' . $page='home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/logo.png" alt=""> --}}
            <h1 class="sitename">KaiyiEgypt</h1><span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/' . $page='home') }}" class="active">Home</a></li>
                <li><a href="{{ url('/' . $page='about-us') }}">About us</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Model</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="models">
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/hero-carousel/1627442051180.png') }}" alt="Model 1">
                                <a href="{{ url('/' . $page='Kaiyi-X-3-Pro') }}">Kaiyi X3 Pro</a>
                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/hero-carousel/1639473877768.png') }}" alt="Model 2">
                                <a href="{{ url('/' . $page='Kaiyi-E-5') }}">Kaiyi E5</a>
                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/hero-carousel/1692239206534-1.png') }}" alt="Model 3">
                                <a href="{{ url('/' . $page='Kaiyi-X-7') }}">Kaiyi X7</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Buy</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/' . $page='test-drive') }}">Book Test Drive</a></li>
                        <li><a href="{{ url('/' . $page='request-quote') }}">Requset for Quote</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>After Sales</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/' . $page='customer-service') }}">Customer-support</a></li>
                        <li><a href="{{ url('/' . $page='service-booking') }}">Service Booking</a></li>
                        <li><a href="{{ url('/' . $page='warranty') }}">Warranty</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/' . $page='contact-us') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
