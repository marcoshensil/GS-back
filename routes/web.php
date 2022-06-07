<?php

use App\Http\Controllers\CadastraController;
use App\Http\Controllers\ListaController;
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

Route::get('/insumo', [ListaController::class, 'index']);
Route::post('/insumo', [CadastraController::class, 'store']);
