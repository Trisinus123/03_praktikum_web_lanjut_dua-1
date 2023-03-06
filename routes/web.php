<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::get('/profile/{nim?}', [App\Http\Controllers\ProfileController::class,'index'])->name('profile');
Route::get('/pengalaman-kuliah', [App\Http\Controllers\KuliahController::class,'index'])->name('pengalamanKuliah');