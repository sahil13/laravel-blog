<?php

use Illuminate\Support\Facades\Route;

use App\Market;
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

Route::get('/markets', 'MarketController@index');
Route::get('/description', 'MarketController@show');


Route::get('/posts', 'PostController@index');

Route::post('/save', 'PostController@save');
Route::get('/edit/{id}', 'PostController@index');

Route::get('/delete/{id}', 'PostController@delete');

Route::get('/', function () {
    return view('welcome');
});
