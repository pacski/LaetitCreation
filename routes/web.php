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

Route::get('/', 'CommandsController@statsCommands' )->name('accueil')->middleware('auth');

Route::get('/liste_des_commandes', 'CommandsController@showCommands')->middleware('auth');

Route::get('/stock', 'TissusesController@showTissuses')->name('stock')->middleware('auth'); 


Route::post('/liste_des_commandes', 'CommandsController@addCommand' )->name('liste_des_commandes')->middleware('auth');

Route::post('/', 'ProductsController@addProduct' )->name('accueil')->middleware('auth');

Route::post('/stock', 'TissusesController@addTissuses')->name('stock')->middleware('auth');

Route::get('/liste_des_commandes/{command}', 'CommandsController@showOneCommand')->name('oneCommand')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
