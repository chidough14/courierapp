<?php

use Illuminate\Http\Request;

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


Route::middleware('auth:api')->group(function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/items','ItemController@index');
    Route::post('/items', 'ItemController@store');
    Route::put('/items/{item}','ItemController@update');
    Route::delete('/items/{item}','ItemController@destroy');
    Route::get('/items/{item}','ItemController@show');
});

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/login','AuthController@login');
Route::get('/logout','AuthController@logout');
Route::post('/user/register','AuthController@register');
