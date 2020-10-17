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

Route::get('/', 'App\Http\Controllers\NotController@index');
    Route::get('/ekle', 'App\Http\Controllers\NotController@addIndex')->name('ekle');
Route::post('/ekle', 'App\Http\Controllers\NotController@add')->name('ekle.post');
Route::get('/sil/{id}', 'App\Http\Controllers\NotController@delete')->name('sil');
Route::get('/guncelle/{id}', 'App\Http\Controllers\NotController@updateIndex')->name('guncelle');
Route::post('/guncelle/{id}', 'App\Http\Controllers\NotController@update')->name('guncelle.post');
