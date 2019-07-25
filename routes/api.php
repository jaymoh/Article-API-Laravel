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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get items
Route::get('articles', 'ArticleController@index');

//get one item
Route::get('article/{id}', 'ArticleController@show');

//store item
Route::post('article', 'ArticleController@store');

//update item
Route::put('article/{id}', 'ArticleController@store');

//delete item
Route::delete('article/{id}', 'ArticleController@destroy');