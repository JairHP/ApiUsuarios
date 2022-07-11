<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', [clienteController::class, 'list']);
Route::get('clientes/{cliente}', [clienteController::class, 'show']);
Route::post('clientes', [clienteController::class, 'store']);
Route::put('clientes/{cliente}', [clienteController::class, 'update']);
Route::delete('clientes/{cliente}', [clienteController::class, 'destroy']);