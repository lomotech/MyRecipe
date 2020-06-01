@extends('layouts.app')

@section('content')
    <h1>Tambah resepi baharu</h1>

    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf
        Nama <input type="text" name="name">

        @error('name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <div>
            <button type="submit">Hantar</button>
        </div>
    </form>
@endsection
