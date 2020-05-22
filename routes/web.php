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

Route::get('display1', 'PageController@display1');
Route::get('display2', 'PageController@display2');
Route::get('display3', 'PageController@display3');
Route::get('display4', 'PageController@display4');
Route::get('display5', 'PageController@display5');
Route::get('display6', 'PageController@display6');
Route::get('display7', 'PageController@display7');
Route::get('display8', 'PageController@display8');
Route::get('display9', 'PageController@display9');
Route::get('display10', 'PageController@display10');
Route::get('display11', 'PageController@display11');
Route::get('display12', 'PageController@display12');
Route::post('', array(
    'uses' => 'ProfileController@doLogin'
));
Route::get('logout', array(
    'uses' => 'ProfileController@doLogout'
));

Route::get('/', function () {
    return view('1_depan');
});
