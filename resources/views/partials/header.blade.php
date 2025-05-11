<header>
    <div class="container-fluid bg-dark">
        <h1 class="p-5 text-white mb-0"> @yield('title') </h1>
    </div>

    <div class="container-fluid bg-secondary py-2 px-4 d-flex flex-row">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-light fw-bold border-0 fs-6 p-2 me-2">
            Progetti
        </a>

        <a href="{{ route('types.index') }}" class="btn btn-outline-light fw-bold border-0 fs-6 p-2 me-2">
            Tipi
        </a>

        <a href="{{ route('technologies.index') }}" class="btn btn-outline-light fw-bold border-0 fs-6 p-2 me-2">
            Tecnologie
        </a>
    </div>
</header>
