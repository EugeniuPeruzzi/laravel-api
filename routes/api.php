<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// importo il controlle di api

use App\Http\Controllers\Api\PostController;

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

// Imposto la rota 

Route::get('/posts', [PostController::class, 'index']);
