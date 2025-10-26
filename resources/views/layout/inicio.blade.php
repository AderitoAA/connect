<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SanlamAllianz')</title>

    <link rel="icon" type="image/ico" href="{{ asset('img/slm.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --blue-main: #0072ce;
            --blue-dark: #002d72;
            --blue-light: #e6f0ff;
            --gold: #007addd9;
        }

        body {
            font-family: 'AllianzNeoW02-Regular', sans-serif;
            background-color: #fff;
            margin: 0;
        }

        /* ======= TOPO ======= */
        .top-bar {
            background: var(--blue-main);
            color: #fff;
            font-size: 14px;
            padding: 6px 0;
        }

        .top-bar a {
            color: #fff;
            margin-right: 15px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
        }

        .top-bar a:hover {
            text-decoration: underline;
        }

        /* ======= CABEÇALHO ======= */
        header.bg-gradient {
            background: linear-gradient(90deg, var(--blue-main), var(--blue-dark));
            color: #fff;
            padding: 15px 0;
        }

        header .logo {
            height: 40px;
        }

        /* ======= MENU ======= */
        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .navbar-nav .nav-link {
            color: var(--blue-dark) !important;
            font-weight: 600;
            position: relative;
            padding: 10px 16px !important;
            transition: all 0.3s ease;
        }

        /* Linha animada */
        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 3px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .navbar-nav .nav-link.active {
            color: var(--blue-main) !important;
            font-weight: 700;
        }

        /* Dropdown */
        .dropdown-menu {
            border: none;
            border-radius: 0 0 8px 8px;
            background: var(--blue-main);
            margin-top: 0;
            display: none;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .dropdown-item {
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .dropdown-item:hover,
        .dropdown-item.active {
            background: var(--blue-dark);
            color: var(--gold);
        }

        /* Hover no desktop */
        @media (min-width: 992px) {
            .navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                opacity: 1;
            }
        }

        /* Botão login */
        .login-btn {
            background-color: var(--blue-main);
            color: #fff;
            border-radius: 4px;
            padding: 6px 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: var(--blue-dark);
            color: #fff;
        }

        /* ======= PESQUISA ======= */
        .input-group .form-control {
            border-radius: 20px 0 0 20px;
            border-color: var(--blue-main);
        }

        .input-group .btn {
            border-radius: 0 20px 20px 0;
            border-color: var(--blue-main);
            color: var(--blue-main);
        }

        .input-group .btn:hover {
            background: var(--blue-main);
            color: #fff;
        }

        footer {
            background: var(--blue-dark);
            color: #fff;
            padding: 14px 0;
            text-align: center;
            font-size: 14px;
        }

        /* ======= RESPONSIVO ======= */
        @media (max-width: 768px) {
            .navbar-nav .nav-link::after {
                display: none;
            }

            .navbar-nav .nav-link.active {
                background-color: var(--blue-light);
                border-left: 4px solid var(--gold);
            }

            .input-group {
                width: 100%;
            }
        }
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
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Início</a></li>
                    <li class="nav-item"><a href="{{ url('/sobre') }}" class="nav-link {{ Request::is('sobre') ? 'active' : '' }}">Sobre Nós</a></li>
                    <li class="nav-item"><a href="{{ url('/agencias') }}" class="nav-link {{ Request::is('agencias') ? 'active' : '' }}">Agências</a></li>

                    <!-- Colaboradores -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('colaboradores/*') ? 'active' : '' }}" href="#">Colaboradores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('colaboradores/novos') ? 'active' : '' }}" href="{{ url('/colaboradores/novos') }}">Novos</a></li>
                            <li><a class="dropdown-item {{ Request::is('colaboradores/equipa') ? 'active' : '' }}" href="{{ url('/colaboradores/equipa') }}">Equipa</a></li>
                        </ul>
                    </li>

                    <!-- Produtos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('produtos*') || Request::is('campanhas*') || Request::is('parcerias*') ? 'active' : '' }}" href="#">Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('catalogo') ? 'active' : '' }}" href="{{ url('/catalogo') }}">Catálogo</a></li>
                            <li><a class="dropdown-item {{ Request::is('campanhas') ? 'active' : '' }}" href="{{ url('/campanhas') }}">Campanhas</a></li>
                            <li><a class="dropdown-item {{ Request::is('parcerias') ? 'active' : '' }}" href="{{ url('/parcerias') }}">Parcerias</a></li>
                        </ul>
                    </li>

                    <!-- Documentos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('documentos*') || Request::is('templates*') || Request::is('formularios*') || Request::is('politicas*') || Request::is('mobilidade*') ? 'active' : '' }}" href="#">Documentos</a>
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

                <!--Pesquisa -->
                <form class="d-flex align-items-center me-3" role="search" action="{{ url('/pesquisar') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="search" name="q" placeholder="Pesquisar..." aria-label="Pesquisar">
                        <button class="btn btn-outline-primary btn-sm" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

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

    <footer>
        <p class="mb-0">SanlamAllianz — Todos os direitos reservados © 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





