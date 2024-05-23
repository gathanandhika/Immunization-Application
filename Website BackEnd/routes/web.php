<?php

use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KembangAnakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrangtuaController;
use App\Models\KembangAnak;
use Illuminate\Auth\Events\Login;

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

Route::get('/', [LoginController::class, 'index'])->name('tesLogin');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/tambah-ortu', [OrangtuaController::class, 'create']);
// Route::get('/tampil-ortu', [OrangtuaController::class, 'index']);
// Route::post('/tambah-ortu', [OrangtuaController::class, 'store']);

Route::resource('orang-tua',OrangtuaController::class);
Route::resource('data-anak',AnakController::class);

// Route::post('/tambah-anak', [AnakController::class, 'store']);
// Route::get('/tambah-data-anak', function() {
//     return view('anak.create');
// });

// Route::get('/edit-data-anak', function() {
//     return view('anak.index');
// });
// Route::get('/data-anak', [AnakController::class, 'index']);
// Route::get('/edit', [AnakController::class, 'store']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/perkembangan', [KembangAnakController::class, 'index']);
Route::post('/update-kembang-anak', [KembangAnakController::class, 'create']);

Route::get('/dashboard', [DashController::class, 'index']);

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/dashboard', [DashController::class, 'index']);
// });

// Route::group(['middleware' => ['auth', 'role:orangtua']], function () {
//     Route::get('/home', [HomeController::class, 'index']);
// });
