<?php

use App\Http\Controllers\CadastraController;
use App\Http\Controllers\ListaController;
use Illuminate\Support\Facades\Route;


Route::get('/investimento', [ListaController::class, 'index']);
Route::post('/investimento', [CadastraController::class, 'store']);
