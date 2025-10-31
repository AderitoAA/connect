@extends('layout.dashboard')

@section('title', 'Criar Notícia')

@section('content')
  @include('partials.dashboard_offcanvas')

  <div class="card p-4">
    <h5>Criar nova notícia</h5>
    @livewire('noticia-form')
  </div>
@endsection