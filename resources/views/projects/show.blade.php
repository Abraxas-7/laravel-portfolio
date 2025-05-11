@extends('layouts.project-layout')

@section('title', $project->name)

@section('content')
    <div class="container py-5">

        <x-edit-bar :model="$project" routeName="projects" />


        <div class="py-3">
            <h2 class="mb-2">{{ $project->name }}</h2>

            <h3 class="py-3">
                {{ $project->type?->name ?? 'Nessun tipo' }}
            </h3>

            <h4 class="pb-3">

                @forelse ($project->technologies as $technology)
                    {{ $technology->name }}
                @empty
                    Nessuna tecnologia associata a questo progetto
                @endforelse
            </h4>

            <div class="d-flex justify-content-between mb-2">
                <h6>{{ $project->client }} </h6>
                <h6>{{ $project->period }} </h6>
            </div>

            <p class="mb-3">{{ $project->description }}</p>
        </div>

    </div>
@endsection
