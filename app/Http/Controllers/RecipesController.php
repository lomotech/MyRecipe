<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $recipes = [
            [ 'id' => 1,  'name' => 'Ayam Bakar Madu'],
            [ 'id' => 2, 'name' => 'Daging Harimau Menangis'],
            [ 'id' => 3, 'name' => 'Puding Jagung'],
        ];

        return view('recipes.index', compact('recipes'));
    }

    public function show($recipe) {
        return view('recipes.show', compact('recipe'));
    }
}
