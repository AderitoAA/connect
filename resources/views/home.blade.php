@extends('layout.inicio')

@section('title', 'Início')

@section('content')
@php
    // garante coleções definidas (evita undefined variable caso controller não passe)
    $slides = $slides ?? collect();
    $latest = $latest ?? collect();
    $popular = $popular ?? collect();
    $anosCasa = $anosCasa ?? collect();
@endphp

<div class="row g-0">
    <!-- conteúdo principal -->
    <div class="col-md-8 p-0">
        <!-- Carrossel principal -->
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="margin-top:-10px;">
            <div class="carousel-inner">
                @if($slides->isNotEmpty())
                    @foreach($slides as $i => $slide)
                        @php
                            $img = $slide->imagem_capa_url;
                            if ($img) {
                                $imgUrl = \Illuminate\Support\Str::startsWith($img, ['http://','https://'])
                                    ? $img
                                    : \Illuminate\Support\Facades\Storage::url($img);
                            } else {
                                $imgUrl = asset('img/Bitmap.svg');
                            }
                        @endphp

                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <img src="{{ $imgUrl }}" class="d-block w-100" alt="{{ $slide->titulo }}">
                            <div class="carousel-caption text-start bg-dark bg-opacity-50 p-3 rounded-3">
                                @if($slide->destaque)
                                    <h6 class="text-warning mb-1">DESTAQUE</h6>
                                @endif
                                <h5 class="fw-bold text-white">{{ $slide->titulo }}</h5>
                                @if($slide->resumo)
                                  <p class="text-light mb-0">{{ $slide->resumo }}</p>
                                @else
                                  <p class="text-light mb-0">{{ \Illuminate\Support\Str::limit(strip_tags($slide->conteudo), 120) }}</p>
                                @endif
                                <p class="mt-2"><a href="{{ route('noticias.show', $slide->slug) }}" class="text-white text-decoration-underline">Ler mais</a></p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- fallback estático -->
                    <div class="carousel-item active">
                        <img src="{{ asset('img/Bitmap.svg') }}" class="d-block w-100" alt="CEO SanlamAllianz">
                        <div class="carousel-caption text-start bg-dark bg-opacity-50 p-3 rounded-3">
                            <h6 class="text-warning mb-1">CEO SANLAMALLIANZ GENERAL INSURANCE</h6>
                            <h5 class="fw-bold text-white">Delphine Traoré</h5>
                            <p class="text-light mb-0">A CEO da General Insurance ressaltou o papel crucial do mercado angolano para o futuro da empresa.</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Indicadores -->
            <div class="carousel-indicators mt-3">
                @if($slides->isNotEmpty())
                    @foreach($slides as $i => $slide)
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></button>
                    @endforeach
                @else
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                @endif
            </div>
        </div>

        <!-- Últimas notícias -->
        <div class="mt-5">
            <h5 class="fw-bold mb-3 text-primary">Últimas Notícias</h5>
            <div class="row">
                @if($latest->isNotEmpty())
                    @php
                        $first = $latest->first();
                        $rest = $latest->slice(1);
                        $firstImg = $first->imagem_capa_url
                            ? (\Illuminate\Support\Str::startsWith($first->imagem_capa_url, ['http://','https://']) ? $first->imagem_capa_url : \Illuminate\Support\Facades\Storage::url($first->imagem_capa_url))
                            : asset('img/Noticia1.svg');
                    @endphp

                    <div class="col-md-6 position-relative">
                        <img src="{{ $firstImg }}" class="img-fluid rounded mb-2" alt="{{ $first->titulo }}">
                        <p class="small text-secondary mb-1">{{ strtoupper($first->titulo) }}</p>
                        <p class="text-muted">{{ \Illuminate\Support\Str::limit($first->resumo ?: strip_tags($first->conteudo), 140) }}</p>
                        <a href="{{ route('noticias.show', $first->slug) }}" class="stretched-link">Ler mais</a>
                    </div>

                    <div class="col-md-6">
                        @foreach($rest as $n)
                            @php
                                $imgN = $n->imagem_capa_url
                                    ? (\Illuminate\Support\Str::startsWith($n->imagem_capa_url, ['http://','https://']) ? $n->imagem_capa_url : \Illuminate\Support\Facades\Storage::url($n->imagem_capa_url))
                                    : asset('img/Noticia1.svg');
                            @endphp
                            <div class="mb-3">
                                <div class="d-flex">
                                    <img src="{{ $imgN }}" class="me-3 rounded" width="90" height="60" alt="{{ $n->titulo }}">
                                    <div>
                                        <h6 class="fw-bold text-dark mb-1">{{ $n->titulo }}</h6>
                                        <p class="text-muted small mb-1">{{ \Illuminate\Support\Str::limit($n->resumo ?: strip_tags($n->conteudo), 120) }}</p>
                                        <a href="{{ route('noticias.show', $n->slug) }}" class="small">Ler mais</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- fallback estático -->
                    <div class="col-md-6">
                        <img src="{{ asset('img/Noticia1.svg') }}" class="img-fluid rounded mb-2" alt="Comemoração">
                        <p class="small text-secondary mb-1">COMEMORANDO O NOVO INÍCIO</p>
                        <p class="text-muted">O dia comemorativo representou um marco importante...</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-dark">SANLAMALLIANZ REFORÇA O COMPROMISSO COM ANGOLA</h6>
                        <p class="text-muted">O contínuo crescimento reflete o desenvolvimento pessoal e profissional...</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- ONDE ESTAMOS -->
        <section class="mt-5 mb-4">
            <h5 class="fw-bold mb-4 text-primary border-bottom pb-2">
                <i class="bi bi-geo-alt-fill me-2 text-warning"></i>Onde Estamos
            </h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h6 class="text-primary fw-bold">Sede Central - Luanda</h6>
                            <p class="small mb-1 text-muted">Av. Comandante Gika, nº 245</p>
                            <p class="small mb-0"><i class="bi bi-telephone"></i> (+244) 937 116 096</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h6 class="text-primary fw-bold">Agência Benguela</h6>
                            <p class="small mb-1 text-muted">Rua Comandante Valódia, nº 102</p>
                            <p class="small mb-0"><i class="bi bi-telephone"></i> (+244) 937 116 096</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h6 class="text-primary fw-bold">Agência Huambo</h6>
                            <p class="small mb-1 text-muted">Av. da Independência, nº 55</p>
                            <p class="small mb-0"><i class="bi bi-telephone"></i> (+244) 937 116 096</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- LADO DIREITO -->
    <div class="col-md-4 p-3">
        <!-- Notícias Populares -->
        <div class="bg-light p-3 rounded mb-3 shadow-sm">
            <h6 class="fw-bold mb-3">Notícias Populares</h6>

            @if($popular->isNotEmpty())
                @foreach($popular as $n)
                    @php
                        $pImg = $n->imagem_capa_url
                            ? (\Illuminate\Support\Str::startsWith($n->imagem_capa_url, ['http://','https://']) ? $n->imagem_capa_url : \Illuminate\Support\Facades\Storage::url($n->imagem_capa_url))
                            : asset('img/noticia3.svg');
                    @endphp
                    <div class="d-flex mb-2">
                        <img src="{{ $pImg }}" class="me-2 rounded" width="70" height="50" alt="{{ $n->titulo }}">
                        <div class="flex-fill">
                            <a href="{{ route('noticias.show', $n->slug) }}" class="mb-0 small d-block text-dark text-decoration-none">{{ \Illuminate\Support\Str::limit($n->titulo, 60) }}</a>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($n->data_publicacao)->diffForHumans() }}</small>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach([3,4,5] as $i)
                <div class="d-flex mb-2">
                    <img src="{{ asset('img/noticia'.$i.'.svg') }}" class="me-2 rounded" width="70" height="50" alt="">
                    <p class="mb-0 small">Notícia {{$i}}</p>
                </div>
                @endforeach
            @endif
        </div>

        <!-- ANOS DE CASA -->
        <div class="bg-white p-3 rounded shadow-sm mb-3">
            <h6 class="fw-bold text-primary mb-3">
                <i class="bi bi-award-fill me-2 text-warning"></i> Anos de Casa
            </h6>

            @if($anosCasa->isNotEmpty())
                @foreach($anosCasa as $c)
                <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                    <img src="{{ $c->foto_url ? ( \Illuminate\Support\Str::startsWith($c->foto_url, ['http://','https://']) ? $c->foto_url : \Illuminate\Support\Facades\Storage::url($c->foto_url) ) : asset('img/placeholder-user.png') }}" class="rounded-circle me-3" width="55" height="55" alt="{{ $c->nome }}">
                    <div>
                        <h6 class="fw-semibold mb-0">{{ $c->nome }}</h6>
                        <p class="text-muted small mb-1"></p>
                        <span class="badge bg-primary small">{{ $c->anos }} anos de casa</span>
                    </div>
                </div>
                @endforeach
            @else
                <!-- fallback estático -->
                @foreach([
                    ['nome'=>'Gerson Bernardo','cargo'=>'Técnico','anos'=>7,'img'=>'Ger000.svg'],
                    ['nome'=>'Giovanny De Carvalho','cargo'=>'Assistente Comercial de Correctores','anos'=>6,'img'=>'0P6A7202-46.svg'],
                    ['nome'=>'Yolanda Bingue','cargo'=>'','anos'=>12,'img'=>'0P6A7233-59.svg']
                ] as $colaborador)
                <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                    <img src="{{ asset('img/'.$colaborador['img']) }}" class="rounded-circle me-3" width="55" height="55" alt="{{ $colaborador['nome'] }}">
                    <div>
                        <h6 class="fw-semibold mb-0">{{ $colaborador['nome'] }}</h6>
                        <p class="text-muted small mb-1">{{ $colaborador['cargo'] }}</p>
                        <span class="badge bg-primary small">{{ $colaborador['anos'] }} anos de casa</span>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <!-- SAZ+ -->
        <div class="text-center p-4 rounded service-desk-card mt-3">
            <i class="bi bi-headset display-6 text-white mb-2"></i>
            <h6 class="text-white mb-2">SAZ+ Service Desk</h6>
            <p class="text-light small mb-3">Precisa de suporte técnico ou administrativo? Envie o seu pedido.</p>
            <a href="https://apps.powerapps.com/play/e/default-96e78183-c7c9-4414-8a83-1dd0c94d15b8/a/c9985e15-7bc1-44b9-9684-fc1d75a26e71"
               class="btn btn-light btn-sm px-3 fw-semibold" target="_blank">
               <i class="bi bi-box-arrow-up-right me-1"></i> Enviar Pedido
            </a>
        </div>
    </div>
</div>

<!-- ESTILO -->
<style>
.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #00529B;
    opacity: 0.7;
}
.carousel-indicators button.active {
    background-color: #FDB913;
    opacity: 1;
}

.service-desk-card {
    background: linear-gradient(90deg,#0066cc,#003399);
    box-shadow: 0 4px 10px rgba(15,28,180,0.15);
}
.bg-light, .bg-white {
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
</style>
@endsection