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
    <div class="top-bar">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <a href="{{url('/')}}">SanlamAllianz</a>
                <a href="#">Intercâmbio de Conhecimentos</a>
                <a href="#">Aprendizagem SanlamAllianz</a>
            </div>
            <a href="{{ url('/login') }}" class="login-btn">
                <i class="bi bi-person-circle"></i> Login
            </a>
        </div>
    </div>

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

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/sobre') }}" class="nav-link {{ Request::is('sobre') ? 'active' : '' }}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/agencias') }}" class="nav-link {{ Request::is('agencias') ? 'active' : '' }}">Agências</a>
                    </li>

                    <!-- Colaboradores -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('colaboradores/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Colaboradores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('colaboradores/novos') ? 'active' : '' }}" href="{{ url('/colaboradores/novos') }}">Novos</a></li>
                            <li><a class="dropdown-item {{ Request::is('colaboradores/aniversariantes') ? 'active' : '' }}" href="{{ url('/colaboradores/aniversariantes') }}">Aniversariantes</a></li>
                            <li><a class="dropdown-item {{ Request::is('colaboradores/equipa') ? 'active' : '' }}" href="{{ url('/colaboradores/equipa') }}">Equipa</a></li>
                        </ul>
                    </li>

                    <!-- Produtos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('produtos*') || Request::is('campanhas*') || Request::is('parcerias*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('produtos') ? 'active' : '' }}" href="{{ url('/produtos') }}">Catálogo</a></li>
                            <li><a class="dropdown-item {{ Request::is('campanhas') ? 'active' : '' }}" href="{{ url('/campanhas') }}">Campanhas</a></li>
                            <li><a class="dropdown-item {{ Request::is('parcerias') ? 'active' : '' }}" href="{{ url('/parcerias') }}">Parcerias</a></li>
                        </ul>
                    </li>

                    <!-- Documentos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('documentos*') || Request::is('templates*') || Request::is('formularios*') || Request::is('politicas*') || Request::is('mobilidade*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Documentos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('documentos') ? 'active' : '' }}" href="{{ url('/documentos') }}">Processuais</a></li>
                            <li><a class="dropdown-item {{ Request::is('templates') ? 'active' : '' }}" href="{{ url('/templates') }}">Templates</a></li>
                            <li><a class="dropdown-item {{ Request::is('formularios') ? 'active' : '' }}" href="{{ url('/formularios') }}">Formulários</a></li>
                            <li><a class="dropdown-item {{ Request::is('politicas') ? 'active' : '' }}" href="{{ url('/politicas') }}">Políticas</a></li>
                            <li><a class="dropdown-item {{ Request::is('mobilidade') ? 'active' : '' }}" href="{{ url('/mobilidade') }}">Mobilidade Interna</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="{{ url('/eventos') }}" class="nav-link {{ Request::is('eventos') ? 'active' : '' }}">Eventos</a></li>
                    <li class="nav-item"><a href="{{ url('/noticias') }}" class="nav-link {{ Request::is('noticias') ? 'active' : '' }}">Notícias</a></li>
                    <li class="nav-item"><a href="https://ao.sanlamallianz.com" target="_blank" class="nav-link">Site</a></li>
                </ul>

                <!-- Idioma -->
                <form class="d-flex align-items-center">
                    <label class="me-2"><i class="bi bi-translate text-primary"></i></label>
                    <select class="form-select form-select-sm">
                        <option>Português</option>
                        <option>English</option>
                        <option>Français</option>
                    </select>
                </form>
            </div>
        </div>
    </nav>

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