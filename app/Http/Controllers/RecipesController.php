<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipesRequest;
use App\Http\Requests\UpdateRecipesRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all(); // [ {}, {} ]

        return view('recipes.index', compact('recipes'));
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(CreateRecipesRequest $request)
    {
        $input = $request->all();

        Recipe::create($input);

        return redirect(route('recipes.index'));
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Recipe $recipe, UpdateRecipesRequest $request)
    {
        $input = $request->all();

        $recipe->update($input);

        return redirect(route('recipes.show', $recipe->id));
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return 'success';
    }
}
