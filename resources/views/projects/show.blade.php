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
                    
                    <div class="card-footer bg-light border-0 text-center py-3">
                        <a href="#" class="btn btn-outline-primary btn-sm">Visualizza Dettagli Tecnici</a>
                        <a href="{{route("projects.index")}}" class="btn btn-outline-primary btn-sm">Torna ai progetti</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection