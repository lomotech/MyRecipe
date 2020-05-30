<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function() {
    return 'ini adalah senarai resepi';
});

Route::get('/recipes/{recipe}', function($recipe) {
    return 'ini adalah resepi '.$recipe;
});
