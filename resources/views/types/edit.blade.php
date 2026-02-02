@extends('layouts.app')

@section('title', "Modifica il progetto")

@section('content')

{{-- @dd($type)  --}}{{-- verifico cosa mi sono passato dal metodo edit --}}

<div class="container mt-5">
    <h2>Modifca Questo Tipo Progetto</h2>

    <form action="{{ route('types.update', $type) }}" method="POST">
        
        @csrf

        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome Tipo Progetto</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$type->name}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{$type->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva Modifica</button>
        <a href="{{ route('types.show', $type) }}" class="btn btn-secondary">Annulla Modifica</a>
    </form>
</div>
    
@endsection