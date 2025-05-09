@extends('layouts.project-layout')

@section('title', 'Lista Tipi')

@section('content')

    <div class="container py-5">
        <div class="py-3 d-flex flex-row-reverse">
            <a type="button" class="btn btn-outline-primary border-2 fw-bold fs-6 p-2" href="{{ route('types.create') }}">
                <i class="fa-solid fa-plus pe-1"></i>
                Nuovo Tipo
            </a>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="fs-5">
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th>{{ $type->name }}</th>
                        <th>{{ Str::limit($type->description, 250) }}</th>
                        <th class="text-center"><a href="{{ route('types.show', $type) }}">Visualizza progetto</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
