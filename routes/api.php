<?php

use App\Http\Controllers\Api\ApiAuth;
use App\Http\Controllers\Api\ApiSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [ApiAuth::class, 'register']);
Route::post('/login', [ApiAuth::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Route::get('/user', [ApiAuth::class, 'getUser']);
    Route::get('/profile', [ApiAuth::class, 'userprofile']);
    Route::put('/updateProfile', [ApiAuth::class, 'updateProfile']);
    Route::post('/logout', [ApiAuth::class, 'logout']);
});


Route::resource('apiSection', ApiSection::class);
