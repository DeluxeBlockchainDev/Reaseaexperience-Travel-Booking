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

Route::get('/', function () {
    return view('main');
});
// hotel
Route::get('/hotel', function () {
    return view('hotel.hotel');
});
Route::get('/hotel/details', function () {
    return view('hotel.details');
});
Route::get('/hotel/booking', function () {
    return view('hotel.booking');
});
Route::get('/hotel/search-result', function () {
    return view('hotel.search-result');
});
Route::get('/hotel/search-list', function () {
    return view('hotel.search-list');
});
// room
Route::get('/room/details', function () {
    return view('room.details');
});
Route::get('/room/cart', function () {
    return view('room.cart');
});
Route::get('/room/checkout', function () {
    return view('room.checkout');
});
Route::get('/room/search-result', function () {
    return view('room.search-result');
});
Route::get('/room/search-list', function () {
    return view('room.search-list');
});
Route::get('/room/search-grid', function () {
    return view('room.search-grid');
});
// activities
Route::get('/activities', function () {
    return view('activities.main');
});
Route::get('/activities/details', function () {
    return view('activities.details');
});
Route::get('/activities/booking', function () {
    return view('activities.booking');
});
Route::get('/activities/search-result', function () {
    return view('activities.search-result');
});
Route::get('/activities/search-list', function () {
    return view('activities.search-list');
});
// transfer
Route::get('/transfer', function () {
    return view('transfer.transfer');
});
Route::get('/transfer/details', function () {
    return view('transfer.details');
});
Route::get('/transfer/booking', function () {
    return view('transfer.booking');
});
Route::get('/transfer/search-result', function () {
    return view('transfer.search-result');
});
Route::get('/transfer/search-list', function () {
    return view('transfer.search-list');
});
// cruise
Route::get('/cruise', function () {
    return view('cruises.cruise');
});
Route::get('/cruise/details', function () {
    return view('cruises.details');
});
Route::get('/cruise/booking', function () {
    return view('cruises.booking');
});
Route::get('/cruise/search-result', function () {
    return view('cruises.search-result');
});
Route::get('/cruise/search-list', function () {
    return view('cruises.search-list');
});
// flight
Route::get('/flight', function () {
    return view('flight.flight');
});
Route::get('/flight/details', function () {
    return view('flight.details');
});
Route::get('/flight/booking', function () {
    return view('flight.booking');
});
Route::get('/flight/search-result', function () {
    return view('flight.search-result');
});
Route::get('/flight/search-list', function () {
    return view('flight.search-list');
});
// blog
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog/details', function () {
    return view('blog.details');
});
// about
Route::get('/about', function () {
    return view('about');
});
// contact
Route::get('/contact', function () {
    return view('contact');
});
// terms & conditions
Route::get('/terms', function () {
    return view('terms-conditions');
});
// become local expert
Route::get('/become-local-expert', function () {
    return view('become-local-expert');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/login', ['uses' => 'App\Http\Controllers\Auth\LoginController@authenticate'])->name('authenticate');
// Registered User Routes
Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');

});
