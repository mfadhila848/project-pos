<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PelangganController;
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
Route::post('/barang-tambah', [BarangController::class, 'store'])->name('barang2');
Route::resource('/supplier', SupplierController::class);
Route::get('/supplier-tambah', [SupplierController::class, 'index2'])->name('supplier2');
Route::post('/supplier-tambah', [SupplierController::class, 'store'])->name('supplier2');
Route::resource('/pelanggan', PelangganController::class);
Route::get('/pelanggan-tambah', [PelangganController::class, 'index2'])->name('pelanggan2');
Route::post('/pelanggan-tambah', [PelangganController::class, 'store'])->name('pelanggan2');
