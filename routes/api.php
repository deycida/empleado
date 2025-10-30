<?php

use App\Http\Controllers\Api\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados', [EmpleadoController::class, 'store']);
