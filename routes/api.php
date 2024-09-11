<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;//una bendita p ese era el error- gracias
use App\Http\Controllers\DetalleOrdenController;
use App\Http\Controllers\ProductoBodegaController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\EmpleadoController;
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
Route::post('/clientes/save', [ClienteController::class, 'save']);
Route::put('/clientes/Update', [ClienteController::class, 'update']);
Route::delete('/clientes/delete', [ClienteController::class, 'delete']);




Route::get('/DetalleOrden/datos/', [DetalleOrdenController::class, 'getData']);
Route::post('/DetalleOrden/save', [DetalleOrdenController::class, 'save']);
Route::put('/DetalleOrden/Update', [DetalleOrdenController::class, 'update']);
Route::delete('/DetalleOrden/delete', [DetalleOrdenController::class, 'delete']);


Route::get('/ProductoBodega/datos/', [ProductoBodegaController::class, 'getData']);
Route::post('/ProductoBodega/save', [ProductoBodegaController::class, 'save']);
Route::put('/ProductoBodega/Update', [ProductoBodegaController::class, 'update']);
Route::delete('/ProductoBodega/delete', [ProductoBodegaController::class, 'delete']);



Route::get('/Turno/datos', [TurnoController::class, 'getData']);
Route::post('/Turno/save', [TurnoController::class, 'save']);
Route::put('/Turno/Update', [TurnoController::class, 'update']);
Route::delete('/Turno/delete', [TurnoController::class, 'delete']);


Route::get('/Empleado/datos', [EmpleadoController::class, 'getData']);
Route::post('/Empleado/save', [EmpleadoController::class, 'save']);
Route::put('/Empleado/Update', [EmpleadoController::class, 'update']);
Route::delete('/Empleado/delete', [EmpleadoController::class, 'delete']);


