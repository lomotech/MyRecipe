<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'RecipesController@index')->name('recipes.index');
Route::get('/recipes/create', 'RecipesController@create')->name('recipes.create');
Route::post('/recipes/create', 'RecipesController@store')->name('recipes.store');
Route::get('/recipes/{recipe}', 'RecipesController@show')->name('recipes.show');
Route::put('/recipes/{recipe}', 'RecipesController@update')->name('recipes.update');
Route::delete('/recipes/{recipe}', 'RecipesController@destroy')->name('recipes.destroy');
Route::get('/recipes/{recipe}/edit', 'RecipesController@edit')->name('recipes.edit');

//Route::resource('/recipes', 'RecipesController');
