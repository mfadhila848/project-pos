<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/kategori', KategoriController::class);
Route::resource('/merek', MerekController::class);
Route::resource('/satuan', SatuanController::class);
Route::resource('/perusahaan', PerusahaanController::class);
Route::resource('/barang', BarangController::class);
Route::get('/barang-tambah', [BarangController::class, 'index2'])->name('barang2');
Route::resource('/supplier', SupplierController::class);
// Route::resource('/supplier', SupplierController::class);
