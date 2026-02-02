@extends('layouts.app')

@section('title', "Aggiungi una nuova Tecnolgia")

@section('content')

<div class="container mt-5">
    <h2>Aggiungi una Nuova Tecnologia</h2>
    
    <form action="{{ route('technologies.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Technologia</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Colore</label>
            <input type="color" name="color" id="color" class="form-control form-control-color" required>
        </div>

        <button type="submit" class="btn btn-success">Salva Tipo Progetto</button>
        <a href="{{ route('technologies.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
    
@endsection