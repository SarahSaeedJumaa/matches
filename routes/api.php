<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\MatchController;

use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
//     return 'new page ';

// });
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);

    Route::get('/test', [AuthController::class,'index']);

    Route::group(['middleware'=>['auth:sanctum']],function(){
      //  Route::post('/logout', [AuthController::class,'logout']);
          Route::get('/profile', function(Request $requist){
              return auth()->user;
    });
});



  Route::get('home',function(){
      return view('matches.home');
  });
//   Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

