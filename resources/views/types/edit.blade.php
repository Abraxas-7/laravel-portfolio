@extends('layouts.project-layout')

@section('title', 'Nuovo tipo')

@section('content')
    <div class="py-5">
        <form action=" {{ route('types.update', $type) }}') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome tipo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrivi il tipo</label>
                <textarea class="form-control" id="description" name="description" rows="10" required>{{ $type->description }}</textarea>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('types.index') }}" class="btn btn-outline-danger fw-bold border-2 fs-6 p-2 px-3 me-3">
                    Annulla
                </a>
                <button type="submit" class="btn btn-outline-primary fw-bold border-2 fs-6 p-2 px-3">
                    Invia
                </button>
            </div>
        </form>
    </div>
@endsection
