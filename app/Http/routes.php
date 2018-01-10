<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'WelcomeController@show');


Route::get('/contact', function() {
    return view('contact');
});

Route::get('/connexion', function() {
    return view('connexion');
});

Route::auth();

Route::get('/home', 'HomeController@index');


// test pour restaurant 

Route::get('/restaurant', 'restaurantController@get');

// Pour afficher le choix de calcul maison ou restaurant

Route::get('/commencer','commencerController@get');


//choix du restaurant
Route::post('/restaurant','restaurantController@post1');


Route::get('/restaurant/{NomResto}','menuRestoController@get');


// pour la calculatrice 
Route::post('/calculatrice','calculatriceController@post');



Route::get('/suivi', 'chartsController@get');


Route::get('/maison', 'MaisonController@get');

Route::post('/maison', 'MaisonController@post');

Route::get('/conseil/viande', 'ConseilViandeController@get');

Route::get('/conseil/fruitlegume', 'ConseilFruitLegumeController@get');

Route::get('/conseil/lait', 'ConseilLaitController@get');

Route::get('/aleatoire','RestaurantAleaController@get');

Route::post('/aleatoire','RestaurantAleaController@post');

Route::get('/infoRestaurant','infoRestoController@get');
