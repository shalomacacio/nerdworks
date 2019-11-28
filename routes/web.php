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

Route::get('/', function(){ return redirect()->route('vacancies.index');});
Route::get('login', 'AuthenticateController@login')->name('login');
Route::get('logout', 'AuthenticateController@logout')->name('logout');
Route::get('register', 'AuthenticateController@regisgter')->name('register');
Route::post('auth', 'AuthenticateController@auth')->name('auth');

Route::resource('vacancies', 'VacanciesController');

