<?php

use App\Http\Controllers\BookingRequestController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InstallmentPaymentsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ServicBookingController;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), 
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],  function () {
            Route::get('/customer-service', function () {
                return view('pages.customer-service');
            })->name('customer-service');

            Route::get('/warranty', function () {
                return view('pages.warranty');
            })->name('warranty');

            Route::get('/contact-us', function () {
                return view('pages.contact-us');
            })->name('contact-us');

            Route::get('/about-us', function () {
                return view('pages.about-us');
            })->name('about-us');

            Route::get('/brand', function () {
                return view('pages.brand');
            });

            Route::get('/service-booking', function () {
                return view('pages.service-booking');
            })->name('service-booking');

            Route::get('/test-drive', function () {
                return view('pages.test-drive');
            })->name('test-drive');

            Route::get('/request-quote', function () {
                return view('pages.request-quote');
            })->name('request-quote');;

            Route::get('/Kaiyi-X-3', function () {
                return view('Models.KaiyiX-3');
            });

            Route::get('/Kaiyi-X-3-Pro', function () {
                return view('Models.KaiyiX-3Pro');
            });

            Route::get('/Kaiyi-E-5', function () {
                return view('Models.KaiyiE-5');
            });

            Route::get('/Kaiyi-X-7', function () {
                return view('Models.KaiyiX-7');
            });

            Route::get('/', [CarController::class, 'index'])->name('home');
            Route::get('/home', [CarController::class, 'index'])->name('home');
            Route::get('/home/{slug}', [CarController::class, 'show'])->name('home.show');

            Route::post('/booking-request', [BookingRequestController::class, 'store'])->name('booking.store');
            Route::post('/installment', [InstallmentPaymentsController::class, 'store'])->name('installment.store');
            Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us.store');
            Route::get('/servic-booking', [ServicBookingController::class, 'create'])->name('servic-booking.create');
            Route::post('/servic-booking', [ServicBookingController::class, 'store'])->name('servic-booking.store');
        }
);
