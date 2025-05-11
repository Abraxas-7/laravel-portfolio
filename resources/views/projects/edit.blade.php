@extends('layouts.project-layout')

@section('title', 'Modifica progetto : ' . $project->name)

@section('content')
    <div class="py-5">
        <form action=" {{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <div class="row">
                    <div class="col-8">
                        <label for="nome" class="form-label">Nome progetto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}"
                            required>
                    </div>
                    <div class="col">
                        <label for="type" class="form-label">Tipo progetto</label>
                        <select name="type" id="type" class="form-select" required>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ $type->id == $project->type_id ? 'selected' : '' }}>
                                    {{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="technologies[]" value="{{ $technology->id }}"
                            id="technology{{ $technology->id }}"
                            {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                        <label class="form-check-label me-2"
                            for="technology{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
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
