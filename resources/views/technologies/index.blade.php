@extends('layouts.app')

@section('title', "Tutti le Tecnologie ")

@section('content')


<div class="container mt-4">
    <a href="{{ route('technologies.create') }}" class="btn btn-success my-4">Aggiungi una tecnologia</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th class="text-center">Tecnologie per implementare i Progetto</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
                <tr>
                    <td class="text-center">{{ $technology->name }}</td>
                    <td class="d-flex justify-content-center gap-2 text-center">
                        <a href="{{ route("technologies.show", $technology) }}" class="btn btn-outline-primary">
                            Visualizza
                        </a>
                        <a href="{{ route('technologies.edit', $technology) }}" class="btn btn-outline-warning">
                            Modifica
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaTecnologiaProgetto-{{ $technology->id }}">
                            Elimina
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="eliminaTecnologiaProgetto-{{ $technology->id }}" tabindex="-1" aria-labelledby="eliminaTecnologiaProgettoLabel-{{ $technology->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered"> {{-- mettere al centro il modale --}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="eliminaTecnologiaProgettoLabel-{{ $technology->id }}">Elimina la Tecnologia: {{ $technology->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vuoi eliminare la tecnologia "<strong>{{ $technology->name }}</strong>"? Questa azione è definitiva.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST">

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