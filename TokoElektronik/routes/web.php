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
    // return view('landing_page/landingpage');
    // return view('landing_page/p');
    return view('main/main');
});
Route::get('/kategori', function () {
    return view('landing/kategori');
});
Route::get('/aboutus', function () {
    return view('landing/about_us');
});
Route::get('/contact', function () {
    return view('landing/contact');
});
