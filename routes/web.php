<?php


// meals controller
Route::get('/meals','MealController@index');
Route::get('/meals/store','MealController@store');


// category controller
Route::get('/categories/create','CategoryController@create');
Route::post('/categories','CategoryController@store');


// contact page controller
Route::get('/contact','PageController@show');


// about page controller
Route::get('/about','PageController@show2');




?>