<div>
    <h3>Gerenciar Eventos</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="salvar">
        <input type="text" wire:model="titulo" placeholder="Título">
        <textarea wire:model="descricao" placeholder="Descrição"></textarea>
        <input type="date" wire:model="data_inicio">
        <input type="date" wire:model="data_fim">
        <input type="text" wire:model="local" placeholder="Local">
        <input type="text" wire:model="imagem_url" placeholder="Imagem URL">
        <button type="submit">Salvar</button>
    </form>

    <hr>

    <table class="table">
        <thead>
            <tr><th>Título</th><th>Data</th><th>Ações</th></tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->titulo }}</td>
                    <td>{{ $evento->data_inicio }}</td>
                    <td>
                        <button wire:click="editar({{ $evento->id }})">Editar</button>
                        <button wire:click="apagar({{ $evento->id }})">Apagar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
