<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotionController;
use App\Http\Controllers\IngredientController;

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


Route::get('/ingredients', [IngredientController::class, 'getIngredients']);
Route::post('/ingredients', [IngredientController::class, 'addIngredient']);
Route::get('/potions', [PotionController::class, 'getPotions']);
Route::post('/potions', [PotionController::class, 'createPotion']);
