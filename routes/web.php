<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\SatuanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/kategori', KategoriController::class);
Route::resource('/merek', MerekController::class);
Route::resource('/satuan', SatuanController::class);