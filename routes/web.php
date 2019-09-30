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

Route::get('/', 'CommandsController@statsCommands' )->name('accueil');

Route::get('/liste_des_commandes', 'CommandsController@showCommands');

Route::get('/stock', 'TissusesController@showTissuses')->name('stock'); 


Route::post('/liste_des_commandes', 'CommandsController@addCommand' )->name('liste_des_commandes');

Route::post('/', 'ProductsController@addProduct' )->name('accueil');

Route::post('/stock', 'TissusesController@addTissuses')->name('stock');

Route::get('/liste_des_commandes/command', 'CommandsController@showOneCommand')->name('oneCommand');
