<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Htpp\Controller\AuthController;
use App\Htpp\Controller\ClienteController;
use App\Htpp\Controller\ProductoBodegaController;

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

Route::get('/cliente/datos', [ClienteController::class, 'getData']);

Route::POST('/cliente/save', [ClienteController::class, 'save']);
Route::PUT('/cliente/update', [ClienteController::class, 'update']);
Route::DELETE('/cliente/Delete', [ClienteController::class, 'Delete']);


Route::GET('/ProductoBodega/Getdata', [ProductoBodegaController::class, 'GetData']);
Route::POST('/ProductoBodega/save', [ProductoBodegaController::class, 'save']);
Route::PUT('/ProductoBodega/update', [ProductoBodegaController::class, 'update']);
Route::DELETE('/ProductoBodega/Delete', [ProductoBodegaController::class, 'Delete']);
