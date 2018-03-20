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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/gebruiker', 'GebruikerController');
/*/*Route::get('/gebruiker', 'Gebruikercontroller@index');
Route::patch('/gebruiker', 'Gebruikercontroller@edit');
Route::post('/gebruiker', 'Gebruikercontroller@update');*/
Route::delete('/gebruiker/{id}/delete', 'Gebruikercontroller@destroy');

Auth::routes();

