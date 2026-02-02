@extends('layouts.app')

@section('title', "Aggiungi un nuovo Tipo di Progetto")

@section('content')

<div class="container mt-5">
    <h2>Aggiungi Nuovo Tipo Progetto</h2>
    
    <form action="{{ route('types.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Tipo Progetto</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva Tipo Progetto</button>
        <a href="{{ route('types.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
    
@endsection