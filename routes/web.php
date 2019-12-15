<?php



Route::get('/meals','MealController@index');
Route::get('/categories','CategoryController@store');


Route::get('/meals/store','MealController@store');
Route::get('/meals/create','MealController@create');


Route::get('/contact','PageController@show');
Route::get('/about','PageController@show2');


?>