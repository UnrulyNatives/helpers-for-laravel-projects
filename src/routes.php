<?php 


Route::group(['middleware' => 'web'], function () {

Route::get('helpers/timezones/{timezone?}', 
  'unrulynatives\helpers\HelpersController@index');

Route::get('unhelpers/gravatar', 
  'unrulynatives\helpers\HelpersController@gravatar');


Route::get('helpers-docs', 
  'unrulynatives\helpers\HelpersController@docs');


});

