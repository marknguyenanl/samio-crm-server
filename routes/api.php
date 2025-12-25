<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactStageController;
use App\Http\Controllers\ContactStageHistoryController;
use App\Http\Controllers\MetricController;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['api', HandleCors::class],
    'prefix' => '/crm/v1',
], function () {
    Route::get('/health', function () {
        return ['status' => 'ok'];
    });

    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1')->name('login');
    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
        Route::post('/me', [AuthController::class, 'me'])->name('me');
    });

    Route::post('/contacts', [ContactController::class, 'addContact'])->name('addContact');
    Route::get('/contacts', [ContactController::class, 'getContacts'])->name('getContacts');
    Route::patch('/contacts/{id}', [ContactController::class, 'updateContact'])->name('updateContact');
    Route::delete('/contacts/{id}', [ContactController::class, 'deleteContact'])->name('deleteContact');

    Route::apiResource('contact-stages', ContactStageController::class);
    Route::post('/contact-stages/next', [ContactStageController::class, 'nextStage'])->name('contactStages.next');

    Route::apiResource('contact-stage-history', ContactStageHistoryController::class);

    Route::get('/metrics/total-leads-per-day', [MetricController::class, 'getTotalLeadsPerDay'])->name('getTotalLeadsPerDay');
});
