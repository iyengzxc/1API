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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/users',[UserController::class,'users']);
});


// Route::get('/users/{id}',[UserController::class,'user']);
// Route::delete('/users/{id}',[UserController::class,'delete']);

Route::post('/login',[AuthController::class,'login']);