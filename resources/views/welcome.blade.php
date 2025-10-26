@extends('layout.inicio')

@section('title', 'Início')

@section('content')
<div class="row g-0">
    <!-- conteúdo principal -->
    <div class="col-md-8 p-0">
        <!-- Carrossel principal -->
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="margin-top:-10px;">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('img/Bitmap.svg') }}" class="d-block w-100" alt="CEO SanlamAllianz">
                    <div class="carousel-caption text-start bg-dark bg-opacity-50 p-3 rounded-3">
                        <h6 class="text-warning mb-1">CEO SANLAMALLIANZ GENERAL INSURANCE</h6>
                        <h5 class="fw-bold text-white">Delphine Traoré</h5>
                        <p class="text-light mb-0">A CEO da General Insurance ressaltou o papel crucial do mercado angolano para o futuro da empresa.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/Bitmap2.svg') }}" class="d-block w-100" alt="Equipa SanlamAllianz">
                    <div class="carousel-caption text-start bg-dark bg-opacity-50 p-3 rounded-3">
                        <h6 class="text-warning mb-1">Automóvel</h6>
                        <h5 class="fw-bold text-white">Conduza com segurança</h5>
                        <p class="text-light mb-0">UM ACOMPANHAMENTO MAIS PRÓXIMO, EM TODAS AS CIRCUNSTÂNCIAS.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/Bitmap.svg') }}" class="d-block w-100" alt="Evento SanlamAllianz">
                    <div class="carousel-caption text-start bg-dark bg-opacity-50 p-3 rounded-3">
                        <h6 class="text-warning mb-1">INOVAÇÃO E TECNOLOGIA</h6>
                        <h5 class="fw-bold text-white">Transformação Digital</h5>
                        <p class="text-light mb-0">A seguradora investe em soluções digitais para melhorar a experiência dos clientes.</p>
                    </div>
                </div>
            </div>

            <!-- Indicadores -->
            <div class="carousel-indicators mt-3">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>

        <!-- Últimas notícias -->
        <div class="mt-5">
            <h5 class="fw-bold mb-3 text-primary">Últimas Notícias</h5>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/Noticia1.svg') }}" class="img-fluid rounded mb-2" alt="Comemoração">
                    <p class="small text-secondary mb-1">COMEMORANDO O NOVO INÍCIO</p>
                    <p class="text-muted">O dia comemorativo representou um marco importante...</p>
                </div>
                <div class="col-md-6">
                    <h6 class="fw-bold text-dark">SANLAMALLIANZ REFORÇA O COMPROMISSO COM ANGOLA</h6>
                    <p class="text-muted">O contínuo crescimento reflete o desenvolvimento pessoal e profissional...</p>
                </div>
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
            @foreach([3,4,5] as $i)
            <div class="d-flex mb-2">
                <img src="{{ asset('img/noticia'.$i.'.svg') }}" class="me-2 rounded" width="70" height="50" alt="">
                <p class="mb-0 small">Notícia {{$i}}</p>
            </div>
            @endforeach
        </div>

        <!-- ANOS DE CASA -->
        <div class="bg-white p-3 rounded shadow-sm mb-3">
            <h6 class="fw-bold text-primary mb-3">
                <i class="bi bi-award-fill me-2 text-warning"></i> Anos de Casa
            </h6>
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

