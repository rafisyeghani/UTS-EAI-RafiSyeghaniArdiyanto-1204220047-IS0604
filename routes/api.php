<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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



Route::apiResource('menus', MenuController::class);
Route::put('/menus/{id}', [MenuController::class, 'update']);
Route::get('/menus/{id}', [MenuController::class, 'show']);

Route::post('/menus/recom-by-budget', [MenuController::class, 'recomByBudget']);

