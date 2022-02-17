<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovementController;

Auth::routes();

Route::middleware(['auth:web'])->group(function () {

    Route::get('/', [ DashBoardController::class, 'index'])->name('home');
    Route::get('/searchPlayers/{id}', [ MatchController::class, 'searchPlayers'])->name('search.players');
    Route::get('/listplayers', [ PlayerController::class, 'listPlayers'])->name('list.players');

    Route::resource('/matchs', MatchController::class);
    Route::resource('/players', PlayerController::class);
    Route::resource('/movements', MovementController::class);

    Route::post('/sellchips/{id}', [ MovementController::class, 'sellchips'])->name('sellchips');
    Route::post('/close-sellchips/{id}', [ MovementController::class, 'closesellchips'])->name('close-sellchips');
    Route::post('/close-match/{id}', [ MatchController::class, 'close'])->name('close.match');
    Route::post('/new-player-in-match/{id}', [ MatchController::class, 'newPlayerInMatch'])->name('newPlayerInMatch');

    Route::get('/setPlayer/{id}', [ PlayerController::class, 'setPlayer'])->name('setPlayer');

    
  });
  Route::post('/new-dealer-in-match/{id}', [ MatchController::class, 'newDealerInMatch'])->name('newDealerInMatch');

