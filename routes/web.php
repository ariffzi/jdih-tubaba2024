<?php

use App\Http\Controllers\ProdukHukumController;
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

Route::prefix('produk-hukum')->group(function () {
    Route::get('/', [ProdukHukumController::class, 'index']);
    Route::get('/show', [ProdukHukumController::class, 'show']);
    Route::get('/detail', [ProdukHukumController::class, 'create']);
    Route::get('/download', [ProdukHukumController::class, 'download']);
    Route::get('/search', [ProdukHukumController::class, 'search']);
});
Route::get('/sop', [UserController::class, 'sop']);
Route::get('/struktur', [UserController::class, 'struktur']);
Route::get('/tentang', [UserController::class, 'tentang']);
Route::get('/visi-misi', [UserController::class, 'visimisi']);
Route::get('/perpustakaan', [UserController::class, 'perpustakaan']);
Route::get('/detail-buku', [UserController::class, 'lihatBuku']);
