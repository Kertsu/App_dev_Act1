<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class, 'index']);

Route::post('/users', [UserController::class, 'store']);

Route::put('/users/{id}', [UserController::class, 'update']);

Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::patch('/users/{id}', [UserController::class, 'patch']);

Route::match(['post', 'put', 'patch'], '/matched-methods', function() {
    return response()->json([
        "success" => true,
        "message" => "This route accepts matched HTTP methods!"
    ]);
});

Route::any('/any-method', function(){
    return response()->json([
        "success" => true,
        "message" => "This route accepts any HTTP methods!"
    ]);
});