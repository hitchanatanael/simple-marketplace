<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ThumbnailsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::get('/simple-mc-admin', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/tambah-produk', [ProdukController::class, 'create'])->name('tambah-produk');
Route::post('/produk-store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/update-produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::post('/hapus-produk/{id}', [ProdukController::class, 'hapus'])->name('produk.hapus');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('tambah-kategori');
Route::post('/kategori-store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/update-kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::post('/hapus-kategori/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

Route::get('/thumbnails', [ThumbnailsController::class, 'index'])->name('thumbnails');
Route::get('/tambah-thumbnails', [ThumbnailsController::class, 'create'])->name('tambah-thumbnails');
Route::post('/thumbnails-store', [ThumbnailsController::class, 'store'])->name('thumbnails.store');
Route::post('/hapus-thumbnails/{id}', [ThumbnailsController::class, 'hapus'])->name('thumbnails.hapus');

// User 
Route::get('/', [HomeUserController::class, 'index']);
Route::get('/kategori/{nama}', [HomeUserController::class, 'showKategori'])->name('showKategori');
