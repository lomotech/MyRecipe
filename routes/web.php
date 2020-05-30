<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'RecipesController@index');

Route::get('/recipes/{recipe}', 'RecipesController@show');
