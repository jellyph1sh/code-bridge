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

Route::get('/', function () {
    return view('home');
});

Route::get('/convert', function () {
    return view('convert');
});

Route::get('/text-generator', function () {
    return view('text-generator');
});

Route::get('/random-number', function () {
    return view('random-number');
});
