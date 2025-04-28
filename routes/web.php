<?php

use App\Http\Controllers\Api\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['message' => 'Welcome to  nexatruxNews-signup backend API'];
});


Route::prefix('api')->group(function () {
    Route::post('/signup', [SignupController::class, 'signup']);
});

require __DIR__.'/auth.php';
