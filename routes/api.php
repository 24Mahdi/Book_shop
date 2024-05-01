<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAdvertisementsController;
use App\Http\Controllers\AuthApiControoler;
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
Route::get('/index', [ApiAdvertisementsController::class, 'Advertisements_index']);
Route::post('/insert', [ApiAdvertisementsController::class, 'Advertisements_insert']);
Route::put('/update/{id}', [ApiAdvertisementsController::class, 'Advertisements_update']);
Route::delete('/delete/{id}', [ApiAdvertisementsController::class, 'Advertisements_remove']);

//Api
Route::post('/register', [AuthApiControoler::class, 'register']);
Route::post('/login', [AuthApiControoler::class, 'login']);
