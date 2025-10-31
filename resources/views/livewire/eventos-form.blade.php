<div>
    <h3>Eventos</h3>

    <div class="row">
        @foreach ($eventos as $evento)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $evento->imagem_url }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                        <p>{{ $evento->local }}</p>
                        <button wire:click="$emit('mostrarDetalhes', {{ $evento->id }})" class="btn btn-primary">Detalhes</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if ($eventoSelecionado)
                        <h4>{{ $eventoSelecionado->titulo }}</h4>
                        <p>{{ $eventoSelecionado->descricao }}</p>
                        <p><strong>Data:</strong> {{ $eventoSelecionado->data_inicio }} - {{ $eventoSelecionado->data_fim }}</p>
                        <p><strong>Local:</strong> {{ $eventoSelecionado->local }}</p>
                    @else
                        <p>Selecione um evento para ver detalhes.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.addEventListener('show-event-modal', () => {
    const modal = new bootstrap.Modal(document.getElementById('eventModal'));
    modal.show();
});
</script>
