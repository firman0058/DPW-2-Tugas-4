<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/template', function () {
//     return view('template.base');
// });

// Route::get('/beranda', function () {
//     return view('Admin.beranda');
// });

// Route::get('/produk', function () {
//     return view('Admin.produk');
// });

// Route::get('/kategori', function () {
//     return view('Admin.kategori');
// });

// Route::get('/login', function () {
//     return view('Admin.login');
// });

// Admin

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

// frontview

Route::get('home', [ClientController::class, 'showHome']);
Route::get('product', [ClientController::class, 'showProduct']);
Route::get('product/{produk}', [ClientController::class, 'showProduct']);

