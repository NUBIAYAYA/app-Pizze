<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;//una bendita p ese era el error- gracias
use App\Http\Controllers\DetalleOrdenController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::GET('/Clientes/datos/', [App\Htpp\Controllers\ClienteController::class, 'getData']);

Route::get('/clientes/datos', [ClienteController::class, 'getData']);
Route::get('/DetalleOrden/datos/', [DetalleOrdenController::class, 'getData']);



