@extends('layouts.app')

@section('content')
    <h1>Tambah resepi baharu</h1>

    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf
        Nama <input type="text" name="name">

        <button type="submit">Hantar</button>
    </form>
@endsection
