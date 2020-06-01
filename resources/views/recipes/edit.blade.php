@extends('layouts.app')

@section('content')
    <h1>Kemaskini resepi: {{ $recipe->name }}</h1>

    <form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
        @csrf
        @method('PUT')

        Nama <input type="text" name="name" value="{{ $recipe->name }}">

        <button type="submit">Hantar</button>
    </form>
@endsection
