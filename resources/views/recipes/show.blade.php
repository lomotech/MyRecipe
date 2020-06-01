@extends('layouts.app')

@section('content')
    <h1>ini adalah resepi nombor {{ $recipe->id }}</h1>
    <p>Nama resepi: {{ $recipe->name }}</p>
    <a href="{{ route('recipes.edit', $recipe->id) }}">Kemaskini</a>
@endsection
