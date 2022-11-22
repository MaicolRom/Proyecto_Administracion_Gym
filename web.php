<?php

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
    return view('welcome');
});

Auth::routes();

Route::resource('afiliados',  App\Http\Controllers\AfiliadoController::class);
Route::resource('sede',  App\Http\Controllers\SedeController::class);
Route::resource('entrenadores',  App\Http\Controllers\EntrenadoreController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
