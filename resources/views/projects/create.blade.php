@extends('layouts.app')

@section('title', "Aggiungi un nuovo progetto")

@section('content')

<div class="container mt-5">
    <h2>Aggiungi Nuovo Progetto</h2>

    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" name="cliente" id="cliente" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="periodo" class="form-label">Data Inizio Progetto</label>
            <input type="date" name="periodo" id="periodo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="riassunto" class="form-label">Riassunto / Descrizione</label>
            <textarea name="riassunto" id="riassunto" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva Progetto</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
    
@endsection