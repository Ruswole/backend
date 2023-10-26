<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\Api\MessageController;

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

Route::get('/carousel', [CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}', [CarouselItemsController::class, 'show']);
Route::delete('/carousel/{id}', [CarouselItemsController::class, 'destroy']);

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index');
    Route::get('/user/{id}', 'show');
    Route::delete('/user/{id}', 'destroy');
    Route::post('/user', 'store');
});

Route::controller(MessageController::class)->group(function () {
    Route::get('/message', 'index');
    Route::get('/message/{id}', 'show');
    Route::delete('/message/{id}', 'destroy');
    Route::post('/message', 'store');
});
