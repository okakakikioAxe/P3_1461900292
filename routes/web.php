<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
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
    return view('home0292');
});

Route::resource('dokter', DokterController::class);
Route::resource('kamar', KamarController::class);
Route::resource('pasien', PasienController::class);
Route::resource('user', UserController::class);

Route::get('dokter/{id}/delete', [DokterController::class, 'destroy']);
Route::get('kamar/{id}/delete', [KamarController::class, 'destroy']);
Route::get('pasien/{id}/delete', [PasienController::class, 'destroy']);
Route::get('user/{id}/delete', [UserController::class, 'destroy']);

Route::post('dokter/filter',[DokterController::class, 'filter']);
Route::post('pasien/filter',[PasienController::class, 'filter']);
Route::post('kamar/filter',[KamarController::class, 'filter']);
