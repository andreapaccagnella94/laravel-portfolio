@extends('layouts.app')

@section('title', "Modifica la Tecnologia")

@section('content')

{{-- @dd($technology)  --}}{{-- verifico cosa mi sono passato dal metodo edit --}}

<div class="container mt-5">
    <h2>Modifca Questo Tecnologia</h2>

    <form action="{{ route('technologies.update', $technology) }}" method="POST">
        
        @csrf

        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome Tecnologia</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$technology->name}}" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Colore</label>
            <input type="color" name="color" id="color" class="form-control form-control-color" value="{{$technology->color}}" required>
        </div>

        <button type="submit" class="btn btn-success">Salva Modifica</button>
        <a href="{{ route('technologies.show', $technology) }}" class="btn btn-secondary">Annulla Modifica</a>
    </form>
</div>
    
@endsection