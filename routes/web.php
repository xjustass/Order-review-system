<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;

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
    return view('layouts.home');
});

Route::get('/uzsakymo_paieska', function () {
    return view('layouts.search');
});


Route::view('/uzsakymas', 'layouts.about_order');


Route::get('/kainos', function () {
    return view('layouts.prices');
});

Route::get('/kontaktai', function () {
    return view('layouts.contact');
});

Route::get('/akumuliatoriai', function () {
    return view('layouts.batteries');
});

Route::get('/paslaugos', function () {
    return view('layouts.services');
});

Route::get('/search', 'App\Http\Controllers\ViewOrderStatusController@search')->name('search');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('orders', OrderController::class)->middleware('admin.user');

    Route::get('generate-pdf/{order}', [PDFController::class, 'generatePDF'])->name('generate-pdf') ->middleware('admin.user');

    Voyager::routes();


});



