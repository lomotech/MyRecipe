@extends('layouts.app')

@section('content')
    <h1>ini adalah resepi nombor {{ $recipe->id }}</h1>
    <p>Nama Resepi: {{ $recipe->name }}</p>
@endsection