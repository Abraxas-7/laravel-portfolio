@extends('layouts.project-layout')

@section('title', $project->name)

@section('content')
    <div class="container">

        <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning">Modifica</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteProject">
            Elimina
        </button>

        <div>
            <small>{{ $project->client }}</small> <br>

            <small>{{ $project->period }}</small>

            <p>{{ $project->description }}</p>
        </div>

        <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">Torna lista progetti</a>
    </div>

    <div class="modal fade" id="deleteProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Conefrma l'eliminazione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il progetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
