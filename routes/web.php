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
    return view('welcome');
});

Route::get('/register', function () {
      
    return view('register') ;
});

Route::get('/dashboard', function () {
    return view('dashboard') ;
});

Route::get('/profile', function () {
    return view('profiledetails') ;
});
<<<<<<< HEAD
Route::get('/contact', function () {
    return view('contact') ;
=======

Route::get('/sendreport', function () {
    return view('sendreport') ;
});

Route::get('/viewreport', function () {
    return view('viewreport') ;
});

Route::get('/rate', function () {
    return view('rate') ;
});

Route::get('/viewrate', function () {
    return view('viewrate') ;
});

Route::get('/alert', function () {
    return view('alert') ;
>>>>>>> 2c7f30009840cdd4c4a4aa0825151610e3362003
});