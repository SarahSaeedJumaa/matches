<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\playerController;
use App\Http\Controllers\UserController;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** for create player */
Route::get('create',[playerController::class,'create']);
Route::post('store',[playerController::class,'store']);

/** for create Match */
Route::get('createMatch',[MatchController::class,'createMatch']);
Route::post('storeMatch',[MatchController::class,'storeMatch']);

/** apper info */
Route::get('appearInfo',[MatchController::class,'getInfo']);

/** */
Route::get('player',[UserController::class,'showPlayer']);
Route::get('teams',[UserController::class,'showTeams']);
// Route::get('home',[UserController::class,'showAll']);

Route::get('attach',[MatchController::class,'showAll']);
Route::post('savePlayrwithMatch',[MatchController::class,'savePlayrwithMatch'])->name('player.match');
