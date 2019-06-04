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


Auth::routes();

Route::get('/', 'HomeController@index')->name('/')->middleware('auth');
Route::get('home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/evaluation/{id}', 'EvaluationController@index')->name('evaluation')->middleware('auth');
Route::post('/evaluation', 'EvaluationController@save')->name('evaluation-save')->middleware('auth');

Route::get('/rel/{id}', 'EvaluationController@show')->name('evaluation-rel')->middleware('auth');

