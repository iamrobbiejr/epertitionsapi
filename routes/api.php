<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PertitionController;
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

Route::apiResource('/pertitions', PertitionController::class);

Route::resource('/authors', AuthorController::class, 'index')->only([
    'index', 'show'
]);
