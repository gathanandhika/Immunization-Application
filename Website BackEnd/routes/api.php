<?php

use App\Http\Controllers\API\AnakController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\OrtuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protrcted Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    // Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [OrtuController::class, 'profile']);
    Route::post('/profile_update/{id}', [OrtuController::class, 'update']);
    Route::get('/anak', [AnakController::class, 'profile']);
    Route::post('/anak/create', [AnakController::class, 'store']);
    Route::post('/anakup/{id}', [AnakController::class, 'update']);
});

// Route::post('/login', [LoginController::class, 'login']);
