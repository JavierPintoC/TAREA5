<?php

use App\Http\Controllers\BATERIAController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/bateria', [BATERIAController::class, 'show']);
Route::post('/crear', [BATERIAController::class, 'store']);
Route::delete('/eliminar/{id}', [BATERIAController::class, 'destroy']);
Route::put('/editar/{id}', [BATERIAController::class, 'edit']);