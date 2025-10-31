@extends('layout.dashboard')

@section('title', 'Dashboard')

@section('content')
  @include('partials.dashboard_offcanvas')

  <div class="row mb-4">
    <div class="col-12">
      <h1 class="h3">Dashboard</h1>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-6 col-md-2">
      <div class="card p-3">
        <small class="text-muted">Utilizadores</small>
        <div class="h4 mt-1">{{ $totalUsuarios }}</div>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="card p-3">
        <small class="text-muted">Notícias publicadas</small>
        <div class="h4 mt-1">{{ $totalNoticias }}</div>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="card p-3">
        <small class="text-muted">Agências</small>
        <div class="h4 mt-1">{{ $totalAgencias }}</div>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="card p-3">
        <small class="text-muted">Documentos públicos</small>
        <div class="h4 mt-1">{{ $totalDocumentos }}</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card p-3">
        <small class="text-muted">Tickets abertos</small>
        <div class="h4 mt-1">{{ $openTickets }}</div>
      </div>
    </div>
  </div>

  <div class="row mt-4 g-4">
    <div class="col-lg-8">
      <div class="card p-3">
        <h5>Notícias nos últimos 7 dias</h5>
        <canvas id="noticiasChart" height="120"></canvas>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card p-3">
        @livewire('widget-stats')
      </div>
    </div>
  </div>

  <div class="row mt-4 g-4">
    <div class="col-lg-6">
      <div class="card p-3">
        <h6>Últimas notícias</h6>
        <ul class="list-unstyled mt-2">
          @foreach($recentNoticias as $n)
            <li class="mb-3">
              <div class="fw-semibold">{{ $n->titulo }}</div>
              <small class="text-muted">{{ \Carbon\Carbon::parse($n->data_publicacao)->diffForHumans() }}</small>
              @if($n->resumo)
                <p class="mb-0">{{ \Illuminate\Support\Str::limit($n->resumo, 140) }}</p>
              @endif
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card p-3">
        <h6>Próximos eventos</h6>
        <ul class="list-unstyled mt-2">
          @foreach($eventsUpcoming as $e)
            <li class="mb-3">
              <div class="fw-semibold">{{ $e->titulo }}</div>
              <small class="text-muted">{{ \Carbon\Carbon::parse($e->data_inicio)->format('d/m/Y H:i') }} @if($e->local) - {{ $e->local }} @endif</small>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('noticiasChart')?.getContext('2d');
    if (!ctx) return;

    // Dados vindos do controller
    const labels = @json($labels);
    const data = @json($data);

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Notícias',
          data: data,
          borderColor: '#0d6efd',
          backgroundColor: 'rgba(13,110,253,0.08)',
          fill: true,
          tension: 0.3
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  });
</script>
@endpush