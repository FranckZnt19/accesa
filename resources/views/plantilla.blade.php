<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesa</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Accesa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="/areas">Areas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/perfils">Perfiles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/empleados">Empleados</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container-fluid">
        @yield('contenido')
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>