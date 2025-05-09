<?php

use App\Http\Controllers\Api\SignupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [SignupController::class, 'signup']);