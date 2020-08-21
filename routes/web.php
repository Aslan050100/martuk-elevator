<?php

use Illuminate\Support\Facades\Route;

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

Route::match(['get','post'],'/main/{locale?}',['uses'=>'MainController@index','as'=>'index']);
Route::post('/req',['uses'=>'MainController@getInfo','as'=>'req']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
