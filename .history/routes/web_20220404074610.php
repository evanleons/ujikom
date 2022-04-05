<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

// Route::get('/riwayat', function () {
//     return view('catatan_perjalanan.riwayat');
// });

// Route::get('/tambah', function () {
//     return view('catatan_perjalanan.tambah');
// });
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::resource('/list-travel', TravelController::class);
Route::get('/list-travel', [TravelController::class, 'index'])->name('travel.index');
Route::get('/add-travel', [TravelController::class, 'create'])->name('travel.create');
Route::post('/list-travel', [TravelController::class, 'store'])->name('travel.store');

Route::get('/login' , [LoginController::class, 'index']);
// Route::get('/list-travel', [TravelController::class, 'index'])->name('travel.edit');
