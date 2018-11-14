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

Route::get('/', 'HomeController@index');
Route::get('/faq', 'FaqController@show');
Route::get('/nosotros', 'NosotrosController@show');
Route::get('/login', 'LoginController@show');
Route::get('register', 'RegisterController@show');
Route::get('portfolio', 'PortfolioController@show');
Route::get('cotizaciones', 'CotizacionesController@show');
Route::get('contacto', 'ContactoController@show');
