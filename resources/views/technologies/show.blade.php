@extends('layouts.project-layout')

@section('title', $technology->name)

@section('content')
    <div class="container py-5">

        <x-edit-bar :model="$technology" routeName="technologies" />


        <div class="py-3">
            <h2 class="mb-4">{{ $technology->name }}</h2>

            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque ipsam repudiandae quidem
                architecto soluta officiis cum, voluptatem eveniet, quam esse, dolorem porro aut saepe blanditiis! Obcaecati
                labore qui quos vero?</p>
        </div>

    </div>
@endsection
