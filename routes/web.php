<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/empty', function () {
        return view('pages.empty');
    });

    Route::get('/customer-service', function () {
        return view('pages.customer-service');
    });

    Route::get('/warranty', function () {
        return view('pages.warranty');
    });

    Route::get('/contact-us', function () {
        return view('pages.contact-us');
    });

    Route::get('/about-us', function () {
        return view('pages.about-us');
    });

    Route::get('/brand', function () {
        return view('pages.brand');
    });

    Route::get('/service-booking', function () {
        return view('pages.service-booking');
    });

    Route::get('/test-drive', function () {
        return view('pages.test-drive');
    });

    Route::get('/request-quote', function () {
        return view('pages.request-quote');
    });
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
});
