<?php

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

// Route::get('/', function () {
//     return View::make('pages.enter-creds');

// });

Route::resource('/', 'CredsController',
    ['only' => ['index', 'store']]);

Route::get('receive/{slug}', ['uses' => 'CredsController@receive']);
Route::post('receive/{slug}', ['uses' => 'CredsController@confirm']);
Route::get('delete/{received_md5}', ['uses' => 'CredsController@delete']);
