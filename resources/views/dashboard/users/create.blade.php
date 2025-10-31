@extends('layout.dashboard')

@section('title', 'Criar Usuário')

@section('content')
  @include('partials.dashboard_offcanvas')

  <div class="card p-4">
    <h5>Criar novo usuário</h5>
    @livewire('user-form')
  </div>
@endsection