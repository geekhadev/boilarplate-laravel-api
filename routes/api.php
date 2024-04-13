<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/healthcheck', function () {
    return response()->json(['message' => 'OK']);
});

// create route login
Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);

// create group route protected with sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/logout', LogoutController::class);
});

require __DIR__.'/tracking/devices.php';
