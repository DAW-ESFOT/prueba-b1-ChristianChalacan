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
//Genres
Route::get('genres', 'App\Http\Controllers\GenderController@index');
Route::get('genres/{gender}', 'App\Http\Controllers\GenderController@show');
Route::post('genres', 'App\Http\Controllers\GenderController@store');
Route::put('genres/{gender}', 'App\Http\Controllers\GenderController@update');
Route::delete('genres/{gender}', 'App\Http\Controllers\GenderController@delete');
Route::get('genres/{id}/movies', 'App\Http\Controllers\GenderController@movie');
//Movies
Route::get('movies', 'App\Http\Controllers\MovieController@index');
Route::get('movies/{movie}', 'App\Http\Controllers\MovieController@show');
Route::post('movies', 'App\Http\Controllers\MovieController@store');
Route::put('movies/{movie}', 'App\Http\Controllers\MovieController@update');
Route::delete('movies/{movie}', 'App\Http\Controllers\MovieController@delete');
//Users
Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{user}', 'App\Http\Controllers\UserController@show');
Route::get('users/{id}/genres', 'App\Http\Controllers\UserController@genders');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::put('users/{user}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\UserController@delete');
