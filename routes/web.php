<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarController;
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
