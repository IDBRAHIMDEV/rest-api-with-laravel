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
//Retreive all users with get http Method
Route::get('/users', 'UserController@index');

//Retreive One object of user  with get http Method
Route::get('/users/{user}', 'UserController@show');

//Persist one User
Route::post('/users', 'UserController@store');

//Update one user
Route::put('/users/{user}', 'UserController@update');

//Destroy one user
Route::delete('/users/{user}', 'UserController@destroy');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
