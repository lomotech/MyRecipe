<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $recipes = Recipe::all(); // [ {}, {} ]

        return view('recipes.index', compact('recipes'));
    }

    public function show(Recipe $recipe) {
        return view('recipes.show', compact('recipe'));
    }
}
