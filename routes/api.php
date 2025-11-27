<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'crm',
], function () {
    Route::post('/v1/register', [AuthController::class, 'register'])->name('register');
    Route::post('/v1/login', [AuthController::class, 'login'])->name('login');
    Route::post('/v1/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/v1/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/v1/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
    Route::get('/v1/health', function () {
        return ['status' => 'ok'];
    });

});
