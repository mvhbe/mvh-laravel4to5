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

Route::get(
    '/',
    'WedstrijdController@dezeMaand'
);

Route::get(
	'kalender',
	'KalenderController@kalender'
);

Route::get(
	'archief/kalender/{kalender_id}',
    'ArchiefController@showKalender'
);

Route::get(
	'uitslagen',
    'UitslagenController@uitslagen'
);

Route::get(
	'archief/kalenders',
	'ArchiefController@overzichtKalenders'
);

Route::get(
	'archief/uitslagen',
	'ArchiefController@overzichtUitslagen'
);

Route::get(
	'archief/uitslagen/{kalender_id}',
	'ArchiefController@overzichtWedstrijdUitslagen'
);

Route::get(
	'contact',
	function(){
		return View::make('contact');
	}
);

Route::get(
    'uitslag/{wedstrijd_id}', 
    'UitslagController@showWedstrijdUitslag'
);
