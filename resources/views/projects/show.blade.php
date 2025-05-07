@extends('layouts.project-layout')

@section('title', $project->name)

@section('content')
    <div class="container py-5">

        <div class="d-flex justify-content-between border border-secondary bg-white rounded border-2 p-2 mb-3">
            <div>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-dark border-0 fw-bold p-1">
                    <i class="fa-solid fa-left-long fs-4"></i>
                </a>
            </div>

            <div>
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning border-0 fw-bold p-1">
                    <i class="fa-solid fa-pen-to-square fs-4"></i>
                </a>
                <button type="button" class="btn btn-outline-danger border-0 fw-bold p-1" data-bs-toggle="modal"
                    data-bs-target="#deleteProject">
                    <i class="fa-solid fa-trash fs-4"></i>
                </button>
            </div>
        </div>


        <div class="py-3">
            <h2 class="mb-4">{{ $project->name }}</h2>

            <div class="d-flex justify-content-between mb-2">
                <h6>{{ $project->client }} </h6>
                <h6>{{ $project->period }} </h6>
            </div>

            <p class="mb-3">{{ $project->description }}</p>
        </div>

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
                        <input type="submit" class="btn btn-danger" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
