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
                    <td>
                        <a href="{{ route("projects.show", $progetto) }}" class="btn btn-sm btn-primary">
                            Visualizza
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection