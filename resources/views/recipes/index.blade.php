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

            <form method="POST" action="{{ route('recipes.destroy', $recipe->id) }}">
                @csrf
                @method('DELETE')
                <button> Hapus</button>
            </form>
        </li>
    @endforeach
    </ol>
@endsection
