@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-10 col-lg-8">
                
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0 d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary text-white rounded-pill px-3 py-2">Laravel Project</span>
                        <span class="text-muted small"><i class="fas fa-calendar-alt"></i> Inizio: {{$project->periodo}}</span>
                    </div>
                    
                    <div class="card-body p-4">
                        <h2 class="card-title fw-bold text-dark">{{$project->name}}</h2>
                        <h5 class="card-subtitle mb-3 text-muted">Cliente: <span class="text-dark">{{$project->cliente}}</span></h5>
                        
                        <hr class="my-4">
                        
                        <h6 class="fw-bold text-uppercase text-secondary small">Descrizione Implementazione</h6>
                        <p class="card-text text-secondary">
                            {{$project->riassunto}}
                        </p>
                        
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <span class="badge bg-light text-dark border">PHP 8.3</span>
                            <span class="badge bg-light text-dark border">Laravel 11</span>
                            <span class="badge bg-light text-dark border">MySQL</span>
                            <span class="badge bg-light text-dark border">Boostrap CSS</span>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-light border-0 text-center d-flex justify-content-between py-3">
                        <div>
                            <a href="{{route("projects.edit", $project)}}" class="btn btn-outline-warning">Modifica</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaProgetto">
                                Elimina
                            </button>
                        
                        </div>

                        <a href="{{route("projects.index")}}" class="btn btn-outline-primary">Torna ai progetti</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminaProgetto" tabindex="-1" aria-labelledby="eliminaProgettoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> {{-- mettere al centro il modale --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eliminaProgettoLabel">Elimina il Progetto: {{ $project->name }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vuoi eliminare il progetto "<strong>{{ $project->name }}</strong>"? Questa azione è definitiva.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf

                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                    </form>                                            
                </div>
            </div>
        </div>                        
    </div>                        

@endsection