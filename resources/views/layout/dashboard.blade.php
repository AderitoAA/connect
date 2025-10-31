<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SanlamAllianz')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/ico" href="{{ asset('img/slm.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <!-- Livewire styles -->
    @livewireStyles

    <style>
        body { background: #f5f7fb; }
        .card { border-radius: 8px; }
    </style>
</head>

<body>
    <!-- TOPO -->


    <!-- CABEÇALHO -->
    <header class="bg-gradient">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/1687440332-logo.svg') }}" alt="Logo SanlamAllianz" class="logo">
            </a>
            <!-- Mascote / robot (comentado corretamente) -->
            <!-- <img src="{{ asset('') }}" alt="Mascote" class="robot"> -->
        </div>
    </header>

   

    <main class="py-4">
        <div class="container">@yield('content')</div>
    </main>

    <footer class="text-center py-3">
        <p class="mb-0">SanlamAllianz — Todos os direitos reservados © 2025</p>
    </footer>

    <!-- Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Alpine.js (opcional, útil com Livewire) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Chart.js (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <!-- Place for page-specific scripts -->
    @stack('scripts')

    <!-- Livewire scripts -->
    @livewireScripts
</body>
</html>