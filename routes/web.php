<?php


// meals controller
Route::get('/meals','MealController@index');
Route::get('/meals/store','MealController@store');


<<<<<<< HEAD
Route::get('/meals/store','MealController@store');
Route::get('/meals/create','MealController@create');

=======
// category controller
Route::get('/categories/create','CategoryController@create');
Route::post('/categories','CategoryController@store');
>>>>>>> 4023a613012c43023926cada380ec262ac0183d5


// contact page controller
Route::get('/contact','PageController@show');


// about page controller
Route::get('/about','PageController@show2');


// Home page controller
Route::get('/home1','Home1Controller@show3');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
 
