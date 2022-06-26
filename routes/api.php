<?php

use App\Http\Controllers\Api\v2\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'v2'], function () {
    Route::get('products', [ProductController::class, 'getProductsAll']);
    Route::get('products/{id}', [ProductController::class, 'getProductByID']);
});
Route::group(['prefix' => 'auth'],function (){
    Route::post('register',[RegisterController::class,'register']);
    Route::post('login',[LoginController::class,'login']);
});
