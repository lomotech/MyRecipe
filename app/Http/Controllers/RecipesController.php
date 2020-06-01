<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index()
    {
//        $recipes = [
//            [ 'id' => 1, 'name' => 'Ayam Bakar Madu'],
//            [ 'id' => 2, 'name' => 'Daging Harimau Menangis'],
//            [ 'id' => 3, 'name' => 'Puding Jagung'],
//        ];

        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store()
    {
        return 'aa';
    }
}
