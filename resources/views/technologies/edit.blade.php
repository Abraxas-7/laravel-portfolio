@extends('layouts.project-layout')

@section('title', 'Nuova technologia')

@section('content')
    <div class="py-5">
        <form action=" {{ route('technologies.update', $technology) }}') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome tipo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}"
                    required>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('technologies.index') }}"
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
