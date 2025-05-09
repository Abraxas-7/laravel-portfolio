@extends('layouts.project-layout')

@section('title', 'Lista progetti')

@section('content')

    <div class="container py-5">
        <div class="py-3 d-flex flex-row-reverse">
            <a type="button" class="btn btn-outline-primary border-2 fw-bold fs-6 p-2" href="{{ route('projects.create') }}">
                <i class="fa-solid fa-plus pe-1"></i>
                Nuovo progetto
            </a>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="fs-5">
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Cliente</th>
                    <th>Periodo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->name }}</th>
                        <th>{{ $project->type?->name ?? 'Nessun tipo' }}</th>
                        <th>{{ $project->client }}</th>
                        <th>{{ $project->period }}</th>
                        <th class="text-center"><a href="{{ route('projects.show', $project) }}">Visualizza progetto</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
