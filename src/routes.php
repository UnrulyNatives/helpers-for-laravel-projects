<?php 


Route::get('helpers/timezones/{timezone?}', 
  'unrulynatives\helpers\HelpersController@index');

Route::get('unhelpers/gravatar', 
  'unrulynatives\helpers\HelpersController@gravatar');