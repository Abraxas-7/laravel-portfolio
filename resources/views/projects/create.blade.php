@extends('layouts.project-layout')

@section('title', 'Nuovo progetto')

@section('content')
    <div class="py-5">
        <form action=" {{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Nome cliente</label>
                <input type="text" class="form-control" id="client" name="client">
            </div>
            <div class="mb-3">
                <label for="period" class="form-label">Periodo di esecuzione</label>
                <input type="text" class="form-control" id="period" name="period">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrivi il progetto</label>
                <textarea class="form-control" id="description" name="description" rows="10"></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
