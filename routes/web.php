<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;

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
Route::get('/', 'App\Http\Controllers\Frontend\UserController@index')->name('fe.index');
Route::get('/games', 'App\Http\Controllers\Frontend\GamesController@index')->name('games.index');
Route::get('/games/ordered-numbers', 'App\Http\Controllers\Frontend\GamesController@orderd_numbered')->name('games.orderd_numbered');
Route::get('/games/matching-photos', 'App\Http\Controllers\Frontend\GamesController@matching_photos')->name('games.matching_photos');
Route::get('/games/pingpong', 'App\Http\Controllers\Frontend\GamesController@pingpong')->name('games.pingpong');
Route::get('/games/snake', 'App\Http\Controllers\Frontend\GamesController@snake')->name('games.snake');
Route::get('/games/flapy-bird', 'App\Http\Controllers\Frontend\GamesController@flapy_bird')->name('games.flapy_bird');

Route::prefix('ajax')->group(function () {
    Route::get('/get/{method}', 'App\Http\Controllers\Globals\AjaxController@fn_ajax_get')->name('extraweb.ajax_get');
    Route::post('/post/{method}', 'App\Http\Controllers\Globals\AjaxController@fn_ajax_post')->name('extraweb.ajax_post');
});
