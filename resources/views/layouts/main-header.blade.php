<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ url('/' . ($page = 'home')) }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ URl::asset('assets/img/kia/logo.png') }}" alt="">
            {{-- <h1 class="sitename">
                kaiyiMotorsEgypt
            </h1><span>.</span> --}}
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/' . ($page = 'home')) }}" class="active">{{ trans('navbar.home') }}</a></li>
                <li><a href="{{ url('/' . ($page = 'about-us')) }}">{{ trans('navbar.about') }}</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>{{ trans('navbar.model') }}</span>
                        {{-- <i class="fa-solid fa-caret-down"></i> --}}
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul class="models">
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" alt="Model 1">
                                <a href="{{ url('/' . ($page = 'Kaiyi-X-3-Pro')) }}">{{ trans('navbar.Kaiyi3Pro') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-E5.png') }}" alt="Model 2">
                                <a href="{{ url('/' . ($page = 'Kaiyi-E-5')) }}">{{ trans('navbar.KaiyiE5') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-X7.png') }}" alt="Model 3">
                                <a href="{{ url('/' . ($page = 'Kaiyi-X-7')) }}">{{ trans('navbar.KaiyiX7') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>{{ trans('navbar.buy') }}</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/' . ($page = 'test-drive')) }}">{{ trans('navbar.test_drive') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('/' . ($page = 'request-quote')) }}">{{ trans('navbar.request_quote') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>{{ trans('navbar.after_sales') }}</span>
                        {{-- <i class="fa-solid fa-caret-down"></i> --}}
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a
                                href="{{ url('/' . ($page = 'customer-service')) }}">{{ trans('navbar.customer_support') }}</a>
                        </li>
                        <li><a
                                href="{{ url('/' . ($page = 'service-booking')) }}">{{ trans('navbar.service_booking') }}</a>
                        </li>
                        <li><a href="{{ url('/' . ($page = 'warranty')) }}">{{ trans('navbar.warranty') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/' . ($page = 'contact-us')) }}">{{ trans('navbar.contact') }}</a></li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
    @php
        $flagMap = [
            'en' => 'US',
            'ar' => 'EG',
        ];
    @endphp

    <li class="nav-trans d-flex flex-column flex-lg-row align-items-start align-items-lg-center ms-3"
        style="gap: 10px;">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @php
                $flagCode = $flagMap[$localeCode] ?? $localeCode;
            @endphp
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="nav-link d-flex align-items-center px-2 {{ App::getLocale() === $localeCode ? 'fw-bold text-danger' : '' }}"
                style="text-decoration: none;">
                <img src="{{ asset('assets/img/flags/' . $flagCode . '.png') }}" alt="{{ strtoupper($localeCode) }}"
                    width="20" class="me-1">
                <span style="color: white;">{{ strtoupper($localeCode) }}</span>
            </a>
        @endforeach
    </li>

    <ul>
    </ul>
</header>
