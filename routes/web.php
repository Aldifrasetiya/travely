<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {  //halaman login
    return view('login');
});

Route::get('/home', function () {  //halaman home
    return view('home');    
});

Route::get('/itr', function () {  //halaman informasi travely
    return view('informasi_travely');   
});

// itr -> intra

Route::get('/cusin', function () {  //halaman customer informasi
    return view('customer_informasi');   
});

Route::get('/feecus', function () {  //halaman feedback customer
    return view('feedback_customer');   
});

Route::get('/otp', function () {
    return view('otp');   
});

Route::get('/sb', function () {
    return view('sandi_baru');   
});

Route::get('/notif', function () {
    return view('notifikasi');
});

Route::get('/profile', function () {
    return view('profile');   
});

Route::get('/gks', function () {
    return view('ganti_kata_sandi');
});