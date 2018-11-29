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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/faq', 'FaqController@index');

Route::get('/nosotros', 'NosotrosController@index');

Route::get('/portfolio', 'PortfolioController@index');

Route::get('/cotizaciones', 'CotizacionesController@index');

Route::get('/contacto', 'ContactoController@index');

Route::get('/profile', 'ProfileController@index')->name('profile');
