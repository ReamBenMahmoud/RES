<?php


// meals controller
Route::get('/meals','MealController@index')->middleware('auth');
Route::get('/meals/store','MealController@store')->middleware('auth');
Route::get('/meals/create','MealController@create')->middleware('auth');
Route::get('/meals/{id}/edit','MealController@edit')->middleware('auth');
Route::patch('/meals/{id}','MealController@update')->middleware('auth');
Route::delete('/products/{id}','ProductController@destroy')->middleware('auth');

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

// Reservation Page controller  
Route::get('/reservation','PageController@showReservation');

// chechout page controller
Route::get('/checkout','PageController@showCheckout');



// login admin 

Route::get('/loginAdmin','PageController@loginAdmin');

Route::post('/loginAdmin','PageController@login');


Auth::routes();

Route::get('/home', function() {
    return redirect('/');
})->name('home');

?>
 
