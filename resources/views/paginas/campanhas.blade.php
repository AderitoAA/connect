@extends('layout.inicio')

@section('title', 'Campanhas | SanlamAllianz Angola')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #0072CE;
        --bg-light: #f4f7fb;
        --text-color: #333;
    }

    .campaign-section {
        background: var(--bg-light);
        padding: 80px 20px;
        text-align: center;
    }

    .campaign-section h2 {
        color: var(--primary-color);
        font-weight: 800;
        font-size: 2.2rem;
        margin-bottom: 10px;
    }

    .campaign-section p {
        color: #555;
        font-size: 1rem;
        max-width: 800px;
        margin: 0 auto 50px;
    }

    .campaign-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        margin-bottom: 30px;
    }

    .campaign-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 82, 155, 0.25);
    }

    .campaign-image {
        height: 240px;
        width: 100%;
        object-fit: cover;
        transition: 0.4s;
    }

    .campaign-card:hover .campaign-image {
        transform: scale(1.05);
    }

    .campaign-content {
        padding: 20px;
        text-align: left;
    }

    .campaign-content h5 {
        color: var(--accent-color);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .campaign-content p {
        color: var(--text-color);
        font-size: 0.95rem;
        margin-bottom: 10px;
    }

    .campaign-meta {
        font-size: 0.85rem;
        color: gray;
        margin-bottom: 10px;
    }

    .btn-campaign {
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 0.9rem;
        transition: 0.3s;
        text-transform: uppercase;
        text-decoration: none;
        display: inline-block;
    }

    .btn-campaign:hover {
        background: var(--accent-color);
    }

    @media (max-width: 768px) {
        .campaign-image {
            height: 200px;
        }
    }
</style>

<div class="campaign-section">
    <h2>Campanhas SanlamAllianz Angola</h2>
    <p>Descubra as nossas iniciativas mais recentes que reforçam o compromisso da SanlamAllianz Angola com a inovação, a proteção e com os nossos clientes e comunidades.</p>

    <div class="container">
        <div class="row justify-content-center">

            <!-- Campanha 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="campaign-card">
                    <img src="/imagens/campanhas/formacao-consultores.jpg" alt="Programa Formação Consultores" class="campaign-image">
                    <div class="campaign-content">
                        <h5>Programa “Um Futuro Mais Seguro”</h5>
                        <div class="campaign-meta">
                            <small>Período: Jan 2025 – …</small><br>
                            <small>Categoria: Formação & Desenvolvimento</small>
                        </div>
                        <p>Lançámos um programa para formar 1.000 consultores de seguros anualmente, reforçando a presença no mercado e a qualidade de atendimento em Angola. :contentReference[oaicite:4]{index=4}</p>
                        <a href="#" class="btn-campaign">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <!-- Campanha 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="campaign-card">
                    <img src="/imagens/campanhas/agroseguro.jpg" alt="Lançamento AgroSeguro" class="campaign-image">
                    <div class="campaign-content">
                        <h5>Campanha “AgroSeguro”</h5>
                        <div class="campaign-meta">
                            <small>Período: 2025 – Aprovação</small><br>
                            <small>Categoria: Proteção Agrícola</small>
                        </div>
                        <p>Lançamento do produto AgroSeguro, seguro indexado ao clima para proteger colheitas e investimentos agrícolas em Angola. :contentReference[oaicite:5]{index=5}</p>
                        <a href="#" class="btn-campaign">Ver Detalhes</a>
                    </div>
                </div>
            </div>

            <!-- Campanha 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="campaign-card">
                    <img src="/imagens/campanhas/rebranding-sanlamallianz.jpg" alt="Rebranding SanlamAllianz Angola" class="campaign-image">
                    <div class="campaign-content">
                        <h5>Rebranding SanlamAllianz Angola</h5>
                        <div class="campaign-meta">
                            <small>Data: Abril 2025</small><br>
                            <small>Categoria: Marca & Comunicação</small>
                        </div>
                        <p>A mudança de marca de Sanlam Angola para SanlamAllianz Angola, reforçando a nossa identidade e presença no mercado segurador angolano. :contentReference[oaicite:6]{index=6}</p>
                        <a href="#" class="btn-campaign">Ver Mais</a>
                    </div>
                </div>
            </div>

            <!-- Espaço para mais campanhas -->
            <!-- Adicione mais col-div aqui conforme necessário -->

        </div>
    </div>
</div>
@endsection
