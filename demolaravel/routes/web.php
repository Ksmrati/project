<?php

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
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/donate', 'DonateController@create');
Route::post('/donate', 'DonateController@process');

Route::get('success', [
    'as' => 'success',
    'uses' => 'DonateController@success'
]);

Route::get('Paymentfailure', [
    'as' => 'Paymentfailure',
    'uses' => 'DonateController@Paymentfailure'
]);

Route::get('/invoice/{paymentId}', 'DonateController@invoice')->name('invoice');;
