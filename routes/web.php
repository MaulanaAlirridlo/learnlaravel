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

Route::get('/', 'indexController@show');

// Route::get('/good', 'goodController@index');
// Route::get('/good/add', 'goodController@create');
// Route::get('/good/{good}', 'goodController@show');
// Route::post('/good', 'goodController@store');
// Route::get('/good/{good}/edit', 'goodController@edit');
// Route::put('/good/{good}', 'goodController@update');
// Route::delete('/good/{good}', 'goodController@destroy');
Route::resource('good', 'goodController');

Route::get('/about', 'aboutController@show');

