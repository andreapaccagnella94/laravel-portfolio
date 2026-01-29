@extends('layouts.app')

@section('title', "Modifica il progetto")

@section('content')

{{-- @dd($project) perifico cosa mi sono passato dal metodo edit--}}

<div class="container mt-5">
    <h2>Modifca Questo Progetto</h2>

    <form action="{{ route('projects.update', $project) }}" method="POST">

        @csrf

        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$project->name}}" required>
        </div>

        <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" name="cliente" id="cliente" class="form-control" value="{{$project->cliente}}" required>
        </div>

        <div class="mb-3">
            <label for="periodo" class="form-label">Data Inizio Progetto</label>
            <input type="date" name="periodo" id="periodo" class="form-control" value="{{$project->periodo}}" required>
        </div>

        <div class="mb-3">
            <label for="riassunto" class="form-label">Riassunto / Descrizione</label>
            <textarea name="riassunto" id="riassunto" class="form-control" rows="4" required>{{$project->name}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva Modifica</button>
        <a href="{{ route('projects.show', $project) }}" class="btn btn-secondary">Annulla Modifica</a>
    </form>
</div>
    
@endsection