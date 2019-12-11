<?php



Route::get('/meals','MealController@index');
Route::get('/categories','CategoryController@store');


Route::get('/meals/store','MealController@store');

?>