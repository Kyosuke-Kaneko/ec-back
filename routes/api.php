<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\PurchaseDetailController;

Route::group([
    'middleware' => ['auth:api'],
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register'])->withoutMiddleware(['auth:api']);
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(['auth:api']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user', [AuthController::class, 'me']);
});

Route::get('product',[ProductController::class, 'index']);

Route::get('history',[PurchaseHistoryController::class, 'index']);
Route::post('history',[PurchaseHistoryController::class, 'store']);
Route::post('detail',[PurchaseDetailController::class, 'store']);