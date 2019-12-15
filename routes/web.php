<?php


// meals controller
Route::get('/meals','MealController@index') ;
Route::get('/meals/store','MealController@store') ;


Route::post('/meals/store','MealController@store') ;
Route::get('/meals/create','MealController@create') ;

// category controller
Route::get('/categories/create','CategoryController@create') ;
Route::post('/categories','CategoryController@store') ;


// contact page controller
Route::get('/contact','PageController@show');


// about page controller
Route::get('/about','PageController@show2');


// Home page controller
Route::get('/home1','Home1Controller@show3');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
 
