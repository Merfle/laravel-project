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

Route::get('miliadeco.com/', 'HomeController@index')->name('home');

Route::get('miliadeco.com/faq', 'FaqController@index');

Route::get('miliadeco.com/nosotros', 'NosotrosController@index');

Route::get('miliadeco.com/portfolio', 'PortfolioController@index');

Route::get('miliadeco.com/contacto', 'ContactoController@index');

Route::get('miliadeco.com/profile', 'ProfileController@index')->name('profile');
Route::post('miliadeco.com/profile', 'RenovacionesController@store');
