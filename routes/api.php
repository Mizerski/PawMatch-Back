<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas para o controlador AnimalController
Route::get('/animais', [AnimalController::class, 'index']);
Route::post('/animais', [AnimalController::class, 'store']);
Route::get('/animais/{animal}', [AnimalController::class, 'show']);
Route::put('/animais/{animal}', [AnimalController::class, 'update']);
Route::delete('/animais/{animal}', [AnimalController::class, 'destroy']);
