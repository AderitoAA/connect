<div>
  @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form wire:submit.prevent="submit">
    <div class="mb-3">
      <label class="form-label">Login</label>
      <input type="text" class="form-control" wire:model.defer="login">
      @error('login') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" wire:model.defer="nome">
      @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" wire:model.defer="email">
      @error('email') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Senha</label>
      <input type="password" class="form-control" wire:model.defer="senha">
      @error('senha') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Cargo</label>
      <input type="text" class="form-control" wire:model.defer="cargo">
    </div>

    <div class="mb-3">
      <label class="form-label">Departamento</label>
      <input type="text" class="form-control" wire:model.defer="departamento">
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo</label>
      <select class="form-select" wire:model.defer="tipo">
        <option value="colaborador">Colaborador</option>
        <option value="externo">Externo</option>
        <option value="admin">Admin</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Criar usuário</button>
  </form>
</div>