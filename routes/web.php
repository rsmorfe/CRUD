<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/booking', 'BookingController@index');

Route::get('/booking/show/{id}', 'BookingController@show');

Route::post('/booking/update', 'BookingController@store');

Route::delete('/booking/delete/{id}', function ($id) {
    return view('welcome');
});

