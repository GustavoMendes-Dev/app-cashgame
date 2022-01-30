<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovementController;

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

Route::get('/', [ DashBoardController::class, 'index']);

Route::resource('/matchs', MatchController::class);
Route::resource('/players', PlayerController::class);
Route::resource('/movements', MovementController::class);

Route::post('/sellchips/{id}', [ MovementController::class, 'sellchips'])->name('sellchips');
Route::post('/close-match/{id}', [ MatchController::class, 'close'])->name('close.match');
Route::post('/new-player-in-match/{id}', [ MatchController::class, 'newPlayerInMatch'])->name('newPlayerInMatch');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
