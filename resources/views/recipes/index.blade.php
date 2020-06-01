@extends('layouts.app')

@section('content')
    <h1>ini adalah senarai resepi</h1>

    <a href="{{ route('recipes.create') }}">Tambah Resepi</a>

    <ol>
    @foreach($recipes as $recipe)
        <li>
            {{ $recipe->name }}
            <a href="{{ route('recipes.show', $recipe->id) }}">
                Lihat Resepi
            </a>
        </li>
    @endforeach
    </ol>
@endsection
