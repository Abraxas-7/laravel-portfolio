@extends('layouts.project-layout')

@section('title', 'Nuovo progetto')

@section('content')
    <div class="py-5">
        <form action=" {{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Nome cliente</label>
                <input type="text" class="form-control" id="client" name="client" required>
            </div>
            <div class="mb-3">
                <label for="period" class="form-label">Periodo di esecuzione</label>
                <input type="text" class="form-control" id="period" name="period" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrivi il progetto</label>
                <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('projects.index') }}" class="btn btn-outline-danger fw-bold border-2 fs-6 p-2 px-3 me-3">
                    Annulla
                </a>
                <button type="submit" class="btn btn-outline-primary fw-bold border-2 fs-6 p-2 px-3">
                    Invia
                </button>
            </div>
        </form>
    </div>
@endsection
