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
    return view('index');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/prosedur', function () {
    return view('prosedur');
});

Route::get('/examplevideo', function () {
    return view('video');
});
