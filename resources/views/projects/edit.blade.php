@extends('layouts.project-layout')

@section('title', 'Modifica progetto : ' . $project->name)

@section('content')
    <div class="py-5">
        <form action=" {{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Nome cliente</label>
                <input type="text" class="form-control" id="client" name="client" value="{{ $project->client }}">
            </div>
            <div class="mb-3">
                <label for="period" class="form-label">Periodo di esecuzione</label>
                <input type="text" class="form-control" id="period" name="period" value="{{ $project->period }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrivi il progetto</label>
                <textarea class="form-control" id="description" name="description" rows="10">{{ $project->description }}</textarea>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('projects.show', $project) }}"
                    class="btn btn-outline-danger fw-bold border-2 fs-6 p-2 px-3 me-3">
                    Annulla
                </a>
                <button type="submit" class="btn btn-outline-primary fw-bold border-2 fs-6 p-2 px-3">
                    Invia
                </button>
            </div>
        </form>
    </div>
@endsection
