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

Route::get('/cv', function () {
    return view('CV');
});

Route::get('/realisations', function () {
    return view('realisations');
});

Route::get('/centre_interet', function () {
    return view('centre_interet');
});

Route::get('/contact', function () {
    return view('Contact');
});