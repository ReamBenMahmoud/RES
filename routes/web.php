<?php


// meals controller
Route::get('/meals','MealController@index');
Route::get('/meals/store','MealController@store');
Route::get('/meals/create','MealController@create');
Route::get('/meals/{id}/edit','MealController@edit');
Route::patch('/meals/{id}','MealController@update');
Route::delete('/products/{id}','ProductController@destroy');

// category controller
Route::get('/categories/create','CategoryController@create');
Route::post('/categories','CategoryController@store');
Route::get('/meals','MealController@index') ;
Route::get('/meals/store','MealController@store') ;


Route::post('/meals/store','MealController@store') ;
Route::get('/meals/create','MealController@create') ;

// category controller
Route::get('/categories/create','CategoryController@create') ;
Route::post('/categories','CategoryController@store') ;


// contact page controller
Route::get('/contact','PageController@showContact');


// about page controller
Route::get('/about','PageController@showAbout');


// Home page controller
Route::get('/','PageController@showHome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
 
