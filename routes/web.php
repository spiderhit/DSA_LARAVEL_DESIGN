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

Route::get('/', 'PageController@home');
Route::get('/doctor_list', 'PageController@doctor_list');
Route::get('/doctor_view', 'PageController@doctor_view');
Route::get('/dashboard', 'PageController@dashboard');


Route::get('/contact', function () {

    return view('frontend.pages.contact');

});


Route::get('/contact', function () {

    return view('frontend.pages.contact');

});

Route::get('/edit_profile', function () {

    return view('frontend.pages.contact');

});

Route::get('/change_password', function () {

    return view('frontend.pages.contact');

});

