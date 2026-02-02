@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-10 col-lg-8">
                
                <div class="card shadow-sm border-0 rounded-3">
                                        
                    <div class="card-body p-4">
                        <h2 class="card-title fw-bold text-dark">{{$technology->name}}</h2>
                       
                        <hr class="my-4">
                        
                        <h6 class="fw-bold text-uppercase text-secondary small">Colore : {{$technology->color}}</h6>
                        {{-- <p class="card-text text-secondary">
                            {{$type->description}}
                        </p> --}}
                       
                    </div>
                    
                    <div class="card-footer bg-light border-0 text-center d-flex justify-content-between py-3">
                        <div>
                            <a href="{{route("technologies.edit", $technology)}}" class="btn btn-outline-warning">Modifica</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaTecnologiaProgetto">
                                Elimina
                            </button>
                        
                        </div>

                        <a href="{{route("technologies.index")}}" class="btn btn-outline-primary">Torna alle Technologie</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminaTecnologiaProgetto" tabindex="-1" aria-labelledby="eliminaTecnologiaProgettoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> {{-- mettere al centro il modale --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eliminaTecnologiaProgettoLabel">Elimina la Tecnologia: {{ $technology->name }}</h1>
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

@endsection