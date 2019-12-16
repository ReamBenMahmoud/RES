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
Route::get('/contact','PageController@showContact');


// about page controller
Route::get('/about','PageController@showAbout');


// Home page controller
Route::get('/','PageController@showHome');

// Reservation Page controller  
Route::get('/reservation','PageController@showReservation');

// chechout page controller
Route::get('/checkout','PageController@showCheckout');


Auth::routes();

Route::get('/home', function() {
    return redirect('/');
})->name('home');

?>
 
