@extends('layouts.app')

@section('content')
    <div id="recipes">
        <h2 class="uppercase font-semibold text-lg">Recipes</h2>
        <div class="grid grid-cols grid-cols-4 gap-8">
            @foreach($recipes as $recipe)
                <div class="mt-8">
                    <img src="http://lorempixel.com/output/food-q-c-640-480-10.jpg" alt="">
                    <div class="">
                        <span class="font-semibold text-lg">{{ $recipe->name }}</span>
                    </div>
                    <div class="text-sm text-gray-600">Some description about recipe here.</div>
                    <div class="text-sm text-gray-600 mt-2">Author: Lomotech</div>
                    <div class="text-sm text-gray-600">Rate:
                        <x-star-rating :rate="rand(1,5)"/>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('recipes.show', $recipe->id) }}"
                           class="bg-blue-600 text-white text-sm py-2 px-2 rounded"
                        >
                            Lihat resepi
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
