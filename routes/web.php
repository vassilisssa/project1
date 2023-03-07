<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;
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

Route::get('/', \App\Http\Controllers\IndexController::class);


Route::get('/reg', RegController::class)->name('auth.reg.get');
Route::get('/auth', AuthController::class)->name('auth.auth.get');
