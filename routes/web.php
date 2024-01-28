<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/galeri', [UserController::class, 'galeri']);
Route::get('/berita', [UserController::class, 'berita']);
Route::get('/baca-berita', [UserController::class, 'bacaBerita']);
Route::get('/produk-hukum', [UserController::class, 'ProdukHukum']);
Route::get('/lihat-produk-hukum', [UserController::class, 'lihatProdukHukum']);
Route::get('/sop', [UserController::class, 'sop']);
Route::get('/struktur', [UserController::class, 'struktur']);
Route::get('/tentang', [UserController::class, 'tentang']);
Route::get('/visi-misi', [UserController::class, 'visimisi']);
Route::get('/perpustakaan', [UserController::class, 'perpustakaan']);
Route::get('/detail-buku', [UserController::class, 'lihatBuku']);
