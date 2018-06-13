<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('tatoueur', 'TatoueurController@tatoueurList');
Route::get('tatoueur/{n}', 'TatoueurController@tatoueurShow')->where('n', '[0-9]+');

Route::get('tatoueur/add', 'TatoueurController@tatoueurAdd');
Route::post('tatoueur/postTatoueur', 'TatoueurController@postTatoueurAdd');
*/

Route::get('/', 'HomeController@indexSite');
Route::get('search/autocomplete', 'RechercheController@autocomplete');
