@extends('layouts.app')

@section('content')
    <h1>ini adalah senarai resepi</h1>

    <ol>
    @foreach($recipes as $i => $recipe)
        <li>
            {{ $recipe['name'] }}
            <a href="{{ route('recipes.show', $recipe['id']) }}">
                Lihat Resepi
            </a>
        </li>
    @endforeach
    </ol>
@endsection
