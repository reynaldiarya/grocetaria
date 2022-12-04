<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', [CustomerController::class, 'index']);

Route::get('/toko', [CustomerController::class, 'toko']);

Route::get('/tentang-kami', [CustomerController::class, 'about']);

Route::get('/kontak-kami', [CustomerController::class, 'kontak']);

// User Regis
Route::post('/regis', [RegisterController::class, 'store']);
// Customer Login-Logout
Route::any('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Middleware cek role
Route::group(['middleware' => 'auth'], function() {

    // Halaman yang bisa diakses oleh Admin
    Route::group(['middleware' => 'cekrole:admin'], function() {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::get('/data-produk', function () {
            return view('admin.dataproduk');
        });

        Route::get('/data-pegawai', function () {
            return view('admin.datapegawai');
        });

        Route::get('/profile', function () {
            return view('admin.profile');
        });

        Route::get('/laporan', function () {
            return view('admin.laporan');
        });
    });

    // Halaman yang bisa diakses oleh Customer
    Route::group(['middleware' => 'cekrole:customer'], function() {
        Route::get('/pelacakan', [CustomerController::class, 'pelacakan']);

        Route::get('/status-pengiriman-cod', [CustomerController::class, 'statuscod']);

        Route::get('/status-pengiriman', function () {
            return view('utama.statuspengiriman');
        });

        Route::get('/detail-produk', function () {
            return view('utama.detailproduk');
        });

        Route::get('/keranjang-belanja', function () {
            return view('utama.keranjangbelanja');
        });

        Route::get('/review-pesanan', function () {
            return view('utama.reviewpesanan');
        });

        Route::get('/konfirmasi-pesanan', function () {
            return view('utama.konfirmasipesanan');
        });

        Route::get('/konfirmasi-pesanan-done', function () {
            return view('utama.konfirmasipesanandone');
        });

        Route::get('/form-pengiriman', function () {
            return view('utama.formpengiriman');
        });

	  Route::get('/form-pengiriman-konfirmasi', function () {
    		return view('utama.formpengirimankonfirmasi');
	  });

	  Route::get('/pengiriman', function () {
    		return view('utama.pengiriman');
	  });
    });

});