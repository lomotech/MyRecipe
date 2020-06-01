<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'RecipesController@index');
Route::get('/recipes/create', 'RecipesController@create')->name('recipes.create');
Route::post('/recipes', 'RecipesController@store')->name('recipes.store');
Route::get('/recipes/{recipe}', 'RecipesController@show')->name('recipes.show');
