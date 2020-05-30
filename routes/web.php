<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function() {
    return view('recipes.index');
});

Route::get('/recipes/{recipe}', function($recipe) {
    return view('recipes.show', compact('recipe'));
});
