<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;//una bendita p ese era el error- gracias
use App\Http\Controllers\DetalleOrdenController;
use App\Http\Controllers\ProductoBodegaController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetalleProveedorController;
use App\Http\Controllers\MedioPagoController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\ProveedorController;
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



Route::get('/Pedido/datos', [PedidoController::class, 'getData']);
Route::post('/Pedido/save', [PedidoController::class, 'save']);
Route::put('/Pedido/Update', [PedidoController::class, 'update']);
Route::delete('/Pedido/delete', [PedidoController::class, 'delete']);


Route::get('/DetalleProveedor/datos', [DetalleProveedorController::class, 'getData']);
Route::post('/DetalleProveedor/save', [DetalleProveedorController::class, 'save']);
Route::put('/DetalleProveedor/Update', [DetalleProveedorController::class, 'update']);
Route::delete('/DetalleProveedor/delete', [DetalleProveedorController::class, 'delete']);



Route::get('/MedioPago/datos', [MedioPagoController::class, 'getData']);
Route::post('/MedioPago/save', [MedioPagoController::class, 'save']);
Route::put('/MedioPago/Update', [MedioPagoController::class, 'update']);
Route::delete('/MedioPago/delete', [MedioPagoController::class, 'delete']);



Route::get('/Precio/datos', [PrecioController::class, 'getData']);
Route::post('/Precio/save', [PrecioController::class, 'save']);
Route::put('/Precio/Update', [PrecioController::class, 'update']);
Route::delete('/Precio/delete', [PrecioController::class, 'delete']);

Route::get('/Proveedor/datos', [ProveedorController::class, 'getData']);
Route::post('/Proveedor/save', [ProveedorController::class, 'save']);
Route::put('/Proveedor/Update', [ProveedorController::class, 'update']);
Route::delete('/Proveedor/delete', [ProveedorController::class, 'delete']);