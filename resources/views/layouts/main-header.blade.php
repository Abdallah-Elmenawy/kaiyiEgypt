<header id="header" class="header d-flex align-items-center sticky-top {{ app()->getLocale() === 'ar' ? 'dir-rtl' : 'dir-ltr' }}">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">

        <div class="header-left d-flex align-items-center">
            <a href="{{ url('/' . ($page = 'home')) }}" class="logo d-flex align-items-center">
                <img src="{{ URl::asset('assets/img/kia/logo.png') }}" alt="logo">
            </a>
        </div>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/' . ($page = 'home')) }}" class="{{ request()->routeIs('home', 'home.show') ? 'active' : '' }}">{{ trans('navbar.home') }}</a></li>
                <li><a href="{{ url('/' . ($page = 'about-us')) }}" class="{{ request()->routeIs('about-us') ? 'active' : '' }}">{{ trans('navbar.about') }}</a></li>
                <li class="dropdown">
                    <a href="{{ route('home') }}#services">
                        <span>{{ trans('navbar.model') }}</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul class="models">
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-X3-Pro.png') }}" alt="Model 1" style="cursor: pointer;" onclick="document.getElementById('kaiyix3-link').click();">
                                <a href="{{ url('/' . ($page = 'Kaiyi-X-3-Pro')) }}" id="kaiyix3-link">{{ trans('navbar.Kaiyi3Pro') }}</a>

                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-E5.png') }}" alt="Model 2" style="cursor: pointer;" onclick="document.getElementById('kaiyie5-link').click();">
                                <a href="{{ url('/' . ($page = 'Kaiyi-E-5')) }}" id="kaiyie5-link">{{ trans('navbar.KaiyiE5') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="model-item">
                                <img src="{{ URl::asset('assets/img/kia/models/Kaiyi-X7.png') }}" alt="Model 3" style="cursor: pointer;" onclick="document.getElementById('kaiyix7-link').click();">
                                <a href="{{ url('/' . ($page = 'Kaiyi-X-7')) }}" id="kaiyix7-link">{{ trans('navbar.KaiyiX7') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="{{ request()->routeIs('test-drive') || request()->routeIs('request-quote') ? 'active' : '' }}">
                        <span>{{ trans('navbar.buy') }}</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/' . ($page = 'test-drive')) }}" class="{{ request()->routeIs('test-drive') ? 'active' : '' }}">{{ trans('navbar.test_drive') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('/' . ($page = 'request-quote')) }}" class="{{ request()->routeIs('request-quote') ? 'active' : '' }}">{{ trans('navbar.request_quote') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"class="{{ request()->routeIs('customer-service') || request()->routeIs('service-booking') || request()->routeIs('warranty') ? 'active' : '' }}">
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
                <li><a href="{{ url('/' . ($page = 'contact-us')) }}" class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">{{ trans('navbar.contact') }}</a></li>

                @php
                    $flagMap = [
                        'ar' => 'EG',
                        'en' => 'US',
                    ];

                    $orderedLocales = collect(['ar', 'en'])
                        ->mapWithKeys(fn ($code) => [$code => LaravelLocalization::getSupportedLocales()[$code]])
                        ->all();
                @endphp

                {{-- translate on media screen --}}
                <li class="nav-trans d-md-flex d-custom-trans align-items-center" style="gap: 5px; margin-left: 35px;">
                    @foreach ($orderedLocales as $localeCode => $properties)
                        @php $flagCode = $flagMap[$localeCode] ?? $localeCode; @endphp
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
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
    {{-- @php
        $flagMap = [
            'ar' => 'EG',
            'en' => 'US',
        ];

        $orderedLocales = collect(['ar', 'en'])
            ->mapWithKeys(fn ($code) => [$code => LaravelLocalization::getSupportedLocales()[$code]])
            ->all();
    @endphp --}}
    {{-- Translate on mobile screen --}}
    {{-- <div class="d-flex justify-content-end mt-2 pe-3">
        <div class="nav-trans d-flex flex-column align-items-end" style="gap: 10px;">
            @foreach ($orderedLocales as $localeCode => $properties)
                @php $flagCode = $flagMap[$localeCode] ?? $localeCode; @endphp
                <a rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                    class="nav-link d-flex align-items-center {{ App::getLocale() === $localeCode ? 'fw-bold text-danger' : '' }}"
                    style="text-decoration: none;">
                    <img src="{{ asset('assets/img/flags/' . $flagCode . '.png') }}" alt="{{ strtoupper($localeCode) }}"
                        width="20" class="me-1">
                    <span style="color: white;">{{ strtoupper($localeCode) }}</span>
                </a>
            @endforeach
        </div>
    </div> --}}

</header>