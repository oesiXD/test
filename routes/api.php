<?php

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
Route::group(['prefix' => 'auth'], function () {

    Route::post('login','AuthController@login');
    Route::post('register','AuthController@register');

    Route::group(['middleware'=>'auth:api'], function(){
        Route::get('logout','AuthController@logout');
    });
});

Route::prefix('user')->group(function (){
    Route::middleware('auth:api')->group(function () {
            Route::post('create-user',function(){
                return response()->json([
                    "message"=>"funciona",
                    "status_code"=>200
                ],200);
            })->middleware('scope: can_view');
    });
});
