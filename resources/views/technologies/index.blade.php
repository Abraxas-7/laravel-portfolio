@extends('layouts.project-layout')

@section('title', 'Lista Tecnologie')

@section('content')

    <div class="container py-5">
        <div class="py-3 d-flex flex-row-reverse">
            <a type="button" class="btn btn-outline-primary border-2 fw-bold fs-6 p-2"
                href="{{ route('technologies.create') }}">
                <i class="fa-solid fa-plus pe-1"></i>
                Nuova tecnologia
            </a>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="fs-5">
                    <th class="text-center">Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th class="text-center">{{ $technology->name }}</th>
                        <th class="text-center"><a href="{{ route('technologies.show', $technology) }}">Visualizza
                                Technologia</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
