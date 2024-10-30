<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\PropietarioController;

// Computadoras Routes
Route::get('computadoras', [ComputadorController::class, 'index']);
Route::post('computadoras', [ComputadorController::class, 'store']);
Route::get('computadoras/{computador}', [ComputadorController::class, 'show']);
Route::put('computadoras/{computador}', [ComputadorController::class, 'update']);
Route::delete('computadoras/{computador}', [ComputadorController::class, 'destroy']);

// Propietarios Routes
Route::get('propietarios', [PropietarioController::class, 'index']);
Route::post('propietarios', [PropietarioController::class, 'store']);
Route::get('propietarios/{propietario}', [PropietarioController::class, 'show']);
Route::put('propietarios/{propietario}', [PropietarioController::class, 'update']);
Route::delete('propietarios/{propietario}', [PropietarioController::class, 'destroy']);
