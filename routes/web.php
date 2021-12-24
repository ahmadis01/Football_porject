<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PositionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');




//Auth routes
Route::get('/login/form', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register/form', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/edit/{id}', [HomeController::class, 'EditUser'])->name('edit.user');
    Route::get('/user/update/{id}', [HomeController::class, 'UpdateUser'])->name('update.user');

    //match routes
    Route::get('/match/all', [MatchController::class, 'AllMatches'])->name('all.matches');
    Route::post('/match/add', [MatchController::class, 'AddMatch'])->name('add.match');
    Route::get('/match/edit/{id}', [MatchController::class, 'EditMatch'])->name('edit.match');
    Route::post('/match/update/{id}', [MatchController::class, 'UpdateMatch'])->name('update.match');
    Route::get('/match/delete/{id}', [MatchController::class, 'DeleteMatch'])->name('delete.match');
    Route::get('/match/ditails/{id}', [MatchController::class, 'DitailsMatch'])->name('ditails.match');
    Route::post('match/add-match-ditails/{id}', [MatchController::class, 'AddDitailsMatch']);


    //player routes
    Route::get('/player/all', [PlayerController::class, 'AllPlayers'])->name('all.players');
    Route::post('/player/add', [PlayerController::class, 'AddPlayer'])->name('add.player');
    Route::get('/player/edit/{id}', [PlayerController::class, 'EditPlayer'])->name('edit.player');
    Route::post('/player/update/{id}', [PlayerController::class, 'UpdatePlayer'])->name('update.player');
    Route::get('/player/delete/{id}', [PlayerController::class, 'DeletePlayer'])->name('delete.player');


    //positions routes
    Route::get('/position/all', [PositionController::class, 'AllPositions'])->name('all.positions');
    Route::post('/position/add', [PositionController::class, 'AddPosition'])->name('add.position');
    Route::get('/position/edit/{id}', [PositionController::class, 'EditPosition'])->name('edit.position');
    Route::post('/position/update/{id}', [PositionController::class, 'UpdatePosition'])->name('update.position');
    Route::get('/position/delete/{id}', [PositionController::class, 'DeletePosition'])->name('delete.position');
