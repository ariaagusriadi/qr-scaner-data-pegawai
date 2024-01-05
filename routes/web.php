<?php

use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\qrController;
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
    return view('welcome');
});

Route::controller(DataPegawaiController::class)->group(function () {
    Route::get('/data-pegawai', 'index');
    Route::get('/data-pegawai/create', 'create');
    Route::post('/data-pegawai', 'store');
    Route::get('/data-pegawai/{id}', 'show');
});

Route::get('/generate-qr', [qrController::class, 'index']);
Route::post('/generate-qr', [qrController::class, 'generate']);
