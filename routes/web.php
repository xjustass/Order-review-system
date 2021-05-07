<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PriceController;
use Illuminate\Http\Request;
use  App\Models\ServicePrice;


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

    $posts=\TCG\Voyager\Models\Post::latest()->take(2)->get();

    return view('layouts.home', ['posts' => $posts]);
});

Route::get('/uzsakymo_paieska', function () {
    return view('layouts.search');
});

Route::view('/uzsakymas', 'layouts.about_order');


Route::get('/kainos', function () {
     $prices= ServicePrice::all();

    return view('layouts.prices', ['prices' => $prices]);
});


Route::get('/kontaktai', function () {
    return view('layouts.contact');
});

Route::post('/susisiekti', function (Request $request) {

    $data = $request->validate([
        'name' => 'required|max:30',
        'email' => 'required|max:140',
        'content' => 'required|max:500',
    ]);
Mail::send(new \App\Mail\ContactMail($request));
return redirect('/');
});


Route::get('/akumuliatoriai', function () {
    return view('layouts.batteries');
});

Route::get('/paslaugos', function () {
    return view('layouts.services');
});

Route::get('/search', 'App\Http\Controllers\ViewOrderStatusController@search')->name('search');

Route::get('strapsniai/{id}', 'App\Http\Controllers\FrontController@show')->name('post.view');


//Admin
Route::group(['prefix' => 'admin'], function () {

    //Orders
    Route::resource('orders', OrderController::class)->middleware('admin.user');

    //PDF GENERATE
    Route::get('generate-pdf/{order}', [PDFController::class, 'generatePDF'])->name('generate-pdf') ->middleware('admin.user');

    Route::resource('prices', PriceController::class)->middleware('admin.user');

    //Order serach order in list
    Route::get('/search','App\Http\Controllers\OrderController@search')->name('orders.search')->middleware('admin.user');

    //Text components
    Route::get('text_components','App\Http\Controllers\TextElementController@index')->name('text.edit')->middleware('admin.user');
    Route::put('text_components/update','App\Http\Controllers\TextElementController@update')->name('text.update')->middleware('admin.user');
    Voyager::routes();




});



