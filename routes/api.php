<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Purchase_historyController;
use App\Http\Controllers\Purchase_detailController;

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

Route::group(['prefix' => 'product'],function() {
    Route::get('',[ProductController::class, 'index']);//管理者ではProductを操作するかと思い、groupを用いてます。
});

Route::get('history',[Purchase_historyController::class, 'index']);
Route::post('history',[Purchase_historyController::class, 'store']);
Route::get('detail',[Purchase_detailController::class, 'index']);
Route::post('detail',[Purchase_detailController::class, 'store']);