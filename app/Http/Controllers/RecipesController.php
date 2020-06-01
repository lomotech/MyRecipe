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

    public function create() {
        return view('recipes.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        Recipe::create($input);

        return 'success';
    }
}
