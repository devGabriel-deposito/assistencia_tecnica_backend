<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']); # /login
Route::post('/register', [LoginController::class, 'register']); # /register
Route::put('/redefine', [LoginController::class, 'redefine']); # /redefine

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
