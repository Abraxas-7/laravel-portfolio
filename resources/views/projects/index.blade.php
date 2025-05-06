@extends('layouts.project-layout')

@section('title', 'Lista progetti')

@section('content')
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
