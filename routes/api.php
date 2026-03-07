<?php

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\PostApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class)->middleware('auth:api');
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        // only if im authenticated with jwt (Authorization Heeder)
        Route::middleware('auth:api')->group(function () {
            Route::post('refresh', [AuthController::class, 'refresh']);
            Route::get('me', [AuthController::class, 'me']);
            Route::post('logout', [AuthController::class, 'logout']);
        });
    });
});
