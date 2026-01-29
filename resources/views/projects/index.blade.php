@extends('layouts.app')

@section('title', "Tutti i miei progetti")

@section('content')


<div class="container mt-4">
    <a href="{{ route('projects.create') }}" class="btn btn-success my-4">Aggiungi un progetto</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome Progetto</th>
                <th>Cliente</th>
                <th>Data Inizio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $progetto)
                <tr>
                    <td>{{ $progetto->name }}</td>
                    <td>{{ $progetto->cliente }}</td>
                    <td>{{ $progetto->periodo }}</td>
                    <td class="d-flex justify-content-center gap-2 text-center">
                        <a href="{{ route("projects.show", $progetto) }}" class="btn btn-outline-primary">
                            Visualizza
                        </a>
                        <a href="{{ route('projects.edit', $progetto) }}" class="btn btn-outline-warning">
                            Modifica
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaProgetto-{{ $progetto->id }}">
                            Elimina
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="eliminaProgetto-{{ $progetto->id }}" tabindex="-1" aria-labelledby="eliminaProgettoLabel-{{ $progetto->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered"> {{-- mettere al centro il modale --}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="eliminaProgettoLabel-{{ $progetto->id }}">Elimina il Progetto: {{ $progetto->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vuoi eliminare il progetto "<strong>{{ $progetto->name }}</strong>"? Questa azione è definitiva.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('projects.destroy', $progetto->id) }}" method="POST">

                                            @csrf

                                            @method('DELETE')

                                            <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </td>
                </tr>
                        
            @endforeach
        </tbody>
    </table>
</div>



    
@endsection