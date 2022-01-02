<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user',  function (Request $request) {
        return 'Private route';
    });
});



/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
