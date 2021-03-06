<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

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
    return view('dashboard');
});

Route::get('/matkul', function() {
    return "Hello ini Halaman Matkul";
});

// Route path /mahasiswa memanggil fungsi index dari class MahasiswaController
Route::get('/jadwal', [JadwalController::class, 'index']);