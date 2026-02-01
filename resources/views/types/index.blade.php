@extends('layouts.app')

@section('title', "Tutti i Tipi di progetti")

@section('content')


<div class="container mt-4">
    <a href="{{ route('types.create') }}" class="btn btn-success my-4">Aggiungi un tipo di progetto</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th class="text-center">Tipo Progetto</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td class="text-center">{{ $type->name }}</td>
                    <td class="d-flex justify-content-center gap-2 text-center">
                        <a href="{{ route("types.show", $type) }}" class="btn btn-outline-primary">
                            Visualizza
                        </a>
                        <a href="{{ route('types.edit', $type) }}" class="btn btn-outline-warning">
                            Modifica
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaTipoProgetto-{{ $type->id }}">
                            Elimina
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="eliminaTipoProgetto-{{ $type->id }}" tabindex="-1" aria-labelledby="eliminaTipoProgettoLabel-{{ $type->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered"> {{-- mettere al centro il modale --}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="eliminaTipoProgettoLabel-{{ $type->id }}">Elimina il Progetto: {{ $type->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vuoi eliminare il progetto "<strong>{{ $type->name }}</strong>"? Questa azione è definitiva.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('types.destroy', $type->id) }}" method="POST">

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