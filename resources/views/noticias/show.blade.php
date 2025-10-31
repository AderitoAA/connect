@extends('layout.inicio')

@section('title', $noticia->titulo)

@section('content')
<div class="row">
  <div class="col-md-8">
    <article class="card p-4 mb-4">
      <h1 class="fw-bold">{{ $noticia->titulo }}</h1>
      <div class="text-muted mb-3">
        {{ \Carbon\Carbon::parse($noticia->data_publicacao)->format('d/m/Y H:i') }} • {{ $noticia->views }} visualizações
      </div>

      @php
        $img = $noticia->imagem_capa_url;
        if ($img) {
            $imgUrl = \Illuminate\Support\Str::startsWith($img, ['http://','https://'])
                ? $img
                : \Illuminate\Support\Facades\Storage::url($img);
        } else {
            $imgUrl = asset('img/Noticia1.svg');
        }
      @endphp

      <img src="{{ $imgUrl }}" class="img-fluid rounded mb-3" alt="{{ $noticia->titulo }}">

      <div class="mb-3">
        <p class="lead">{{ $noticia->resumo }}</p>
        <div>{!! $noticia->conteudo !!}</div>
      </div>
    </article>
  </div>

  <div class="col-md-4">
    <div class="card p-3 mb-3">
      <h6>Mais populares</h6>
      <!-- Aqui podes inserir a listagem de populares se quiser -->
    </div>
  </div>
</div>
@endsection