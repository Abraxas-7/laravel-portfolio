@extends('layouts.project-layout')

@section('title', $type->name)

@section('content')
    <div class="container py-5">

        <x-edit-bar :model="$type" routeName="types" />


        <div class="py-3">
            <h2 class="mb-4">{{ $type->name }}</h2>

            <p class="mb-3">{{ $type->description }}</p>
        </div>

    </div>
@endsection
