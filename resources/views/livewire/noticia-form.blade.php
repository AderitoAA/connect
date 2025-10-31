<div>
  @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form wire:submit.prevent="submit" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Título</label>
      <input type="text" class="form-control" wire:model.defer="titulo">
      @error('titulo') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Resumo</label>
      <textarea class="form-control" rows="3" wire:model.defer="resumo"></textarea>
      @error('resumo') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Conteúdo</label>
      <textarea class="form-control" rows="6" wire:model.defer="conteudo"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Imagem</label>
      <input type="file" class="form-control" wire:model="imagem">
      @error('imagem') <div class="text-danger">{{ $message }}</div> @enderror
      <div wire:loading wire:target="imagem" class="text-muted small mt-1">Enviando...</div>

      @if ($imagem)
        <div class="mt-2">
          <strong>Pré-visualização:</strong>
          <img src="{{ $imagem->temporaryUrl() }}" class="img-fluid mt-2" style="max-width: 240px;">
        </div>
      @endif
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" wire:model.defer="publicado" id="publicado" value="1">
      <label class="form-check-label" for="publicado">Publicar agora</label>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" wire:model.defer="destaque" id="destaque" value="1">
      <label class="form-check-label" for="destaque">Marcar como destaque </label>
    </div>

    <div class="mb-3">
      <label class="form-label">Data de publicação</label>
      <input type="datetime-local" class="form-control" wire:model.defer="data_publicacao">
      @error('data_publicacao') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Criar notícia</button>
  </form>
</div>