<?php
Route::get('timezones/{timezone?}', 
  'indianic\timezones\TimezonesController@index');
?>