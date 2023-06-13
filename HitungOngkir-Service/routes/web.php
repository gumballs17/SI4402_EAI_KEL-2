<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;

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

Route::get('/', [ProductController::class, 'getProduct']);

Route::get('/cek-ongkir', [OngkirController::class, 'index']);

Route::post('/cek-ongkir', [OngkirController::class, 'cekOngkir']);

Route::get('/cek-toko', [TokoController::class, 'getToko']);