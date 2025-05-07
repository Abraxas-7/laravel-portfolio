@extends('layouts.project-layout')

@section('title', 'Lista progetti')

@section('content')

    <div class="py-3 d-flex flex-row-reverse">
        <a type="button" class="btn btn-primary p-2" href="{{ route('projects.create') }}">Nuovo progetto</a>
    </div>


    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>name</th>
                <th>company</th>
                <th>period</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->name }}</th>
                    <th>{{ $project->client }}</th>
                    <th>{{ $project->period }}</th>
                    <th><a href="{{ route('projects.show', $project) }}">visualizza progetto</a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
