@extends('layouts.project-layout')

@section('title', $project->name)

@section('content')
    <div class="container">
        <small>{{ $project->client }}</small> <br>

        <small>{{ $project->period }} </small>

        <p>{{ $project->description }}</p>
    </div>
@endsection
