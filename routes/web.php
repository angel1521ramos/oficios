<?php

use App\Http\Controllers\OficioController;
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


Route::view('/','templates.content.home.main')->name('inicio');
Route::put('estatus/{id}', [OficioController::class, 'estatus'])->name('estatus');
Route::resource('oficio', OficioController::class);