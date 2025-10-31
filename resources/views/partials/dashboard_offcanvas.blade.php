<div class="d-flex justify-content-between align-items-center mb-3">
  <div>
    <!-- Botão hamburger -->
    <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
      <i class="bi bi-list"></i>
    </button>
    <span class="ms-2 h5 mb-0">Painel</span>
  </div>
</div>

<!-- Offcanvas menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="dashboardMenu" aria-labelledby="dashboardMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="dashboardMenuLabel">Menu do Dashboard</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>
  <div class="offcanvas-body">
    <div class="list-group">
    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">Resumo</a>

    <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#submenuUsuarios"
       role="button"
       aria-expanded="false"
       aria-controls="submenuUsuarios">
        Usuários
        <i class="bi bi-chevron-down"></i> 
    </a>
    
    <div class="collapse" id="submenuUsuarios">
        <a href="{{ route('dashboard.users.create') }}" class="list-group-item list-group-item-action ps-4">
            ➕ Novo Usuário
        </a>
        <a href="{{ url('/dashboard/users') }}" class="list-group-item list-group-item-action ps-4">
            📋 Gerenciar Usuários
        </a>
    </div>

    <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#submenuPosts"
       role="button"
       aria-expanded="false"
       aria-controls="submenuPosts">
        Posts / Notícias
        <i class="bi bi-chevron-down"></i>
    </a>
    
    <div class="collapse" id="submenuPosts">
        <a href="{{ route('dashboard.posts.create') }}" class="list-group-item list-group-item-action ps-4">
            ➕ Novo Post
        </a>
        <a href="{{ url('/dashboard/posts') }}" class="list-group-item list-group-item-action ps-4">
            📰 Gerenciar Posts
        </a>
    </div>

    <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#submenuEventos"
       role="button"
       aria-expanded="false"
       aria-controls="submenuEventos">
        Eventos
        <i class="bi bi-chevron-down"></i>
    </a>

        <div class="collapse" id="submenuEventos">
        <a href="{{ route('dashboard.eventos') }}" class="list-group-item list-group-item-action ps-4">
            ➕ Novo Evento
        </a>
        <a href="{{ url('/dashboard/eventos') }}" class="list-group-item list-group-item-action ps-4">
            📰 Gerenciar Evento
        </a>
    </div>

    <a href="{{ url('/dashboard/pedidos') }}" class="list-group-item list-group-item-action">Serviços</a>
    <a href="{{ url('/dashboard/documentos') }}" class="list-group-item list-group-item-action">Documentos</a>
</div>
  </div>
</div>