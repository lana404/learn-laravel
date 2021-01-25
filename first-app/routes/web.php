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
    return "Hello ini Dashboard";
});

Route::get('/matkul', function() {
    return "Hello ini Halaman Matkul";
});

Route::get('/mahasiswa', function() {
    return "Hello ini Halaman Mahasiswa";
});
