<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\MatchController;
use App\Http\Controllers\Api\PositionController;

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

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});



Route::group(['middleware' => 'auth:api'], function () {
    
    Route::get('/user/all', [HomeController::class, 'index']);

    //match routes
    Route::get('/match/all', [MatchController::class, 'AllMatches']);
    Route::get('/match/show/{id}', [MatchController::class, 'ShowMatch']);
    Route::post('/match/add', [MatchController::class, 'AddMatch']);
    Route::put('/match/update/{id}', [MatchController::class, 'UpdateMatch']);
    Route::delete('/match/delete/{id}', [MatchController::class, 'DeleteMatch']);
    Route::get('/match/ditails/{id}', [MatchController::class, 'DitailsMatch']);
    Route::post('match/addMatchDitails/{id}', [MatchController::class, 'AddDitailsMatch']);

    //player routes
    Route::get('/player/all', [PlayerController::class, 'AllPlayers']);
    Route::get('/player/show/{id}', [PlayerController::class, 'ShowPlayer']);
    Route::post('/player/add', [PlayerController::class, 'AddPlayer']);
    Route::put('/player/update/{id}', [PlayerController::class, 'UpdatePlayer']);
    Route::delete('/player/delete/{id}', [PlayerController::class, 'DeletePlayer']);


    //positions routes
    Route::get('/position/all', [PositionController::class, 'AllPositions']);
    Route::get('/position/show/{id}', [PositionController::class, 'ShowPosition']);
    Route::post('/position/add', [PositionController::class, 'AddPosition']);
    Route::put('/position/update/{id}', [PositionController::class, 'UpdatePosition']);
    Route::delete('/position/delete/{id}', [PositionController::class, 'DeletePosition']);
});
