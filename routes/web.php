<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/jugar', [PageController::class, 'jugar'])->middleware('auth')->name('jugar');
Route::get('/creditos', [PageController::class, 'creditos'])->middleware('auth')->name('jugar');
Route::post('/creditos', [PageController::class, 'creditos_store']);
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrarse', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/registrarse', [AuthController::class, 'storeRegister']);

