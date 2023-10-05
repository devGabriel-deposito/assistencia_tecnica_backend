<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::prefix('/login')->group(function () {
        Route::post('/', [LoginController::class, 'login']); # /auth/login
        Route::post('/create', [LoginController::class, 'create']); # /auth/login/create
    });

    Route::put('/redefine', [LoginController::class, 'redefine']); # /auth/redefine
});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
