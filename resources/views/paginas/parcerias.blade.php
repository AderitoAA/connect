@extends('layout.inicio')

@section('title', 'Parcerias | SanlamAllianz Angola')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #0072CE;
        --bg-light: #f4f7fb;
        --text-color: #333;
    }

    .partners-section {
        background: var(--bg-light);
        padding: 80px 20px;
        text-align: center;
    }

    .partners-section h2 {
        color: var(--primary-color);
        font-weight: 800;
        font-size: 2.2rem;
        margin-bottom: 15px;
    }

    .partners-section p {
        color: #555;
        font-size: 1rem;
        max-width: 800px;
        margin: 0 auto 50px;
    }

    .partner-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        margin-bottom: 30px;
    }

    .partner-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 82, 155, 0.25);
    }

    .partner-logo {
        height: 120px;
        width: auto;
        margin: 30px auto 0;
        display: block;
        object-fit: contain;
    }

    .partner-content {
        padding: 20px;
        text-align: left;
    }

    .partner-content h5 {
        color: var(--accent-color);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .partner-content p {
        color: var(--text-color);
        font-size: 0.95rem;
        margin-bottom: 10px;
    }

    .partner-meta {
        font-size: 0.85rem;
        color: gray;
        margin-bottom: 10px;
    }

    .btn-partner {
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 0.9rem;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-partner:hover {
        background: var(--accent-color);
    }

    @media (max-width: 768px) {
        .partner-logo {
            height: 100px;
        }
    }
</style>

<div class="partners-section">
    <h2>Nossas Parcerias</h2>
    <p>Na SanlamAllianz Angola acreditamos que o sucesso é mais forte quando construído em conjunto. Conheça as parcerias estratégicas que reforçam nossa presença, oferecem mais valor aos clientes e fortalecem o ecossistema de seguros em Angola.</p>

    <div class="container">
        <div class="row justify-content-center">

            <!-- Parceria 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="partner-card">
                    <img src="/imagens/parcerias/standardbank-logo.png" alt="Standard Bank Angola" class="partner-logo">
                    <div class="partner-content">
                        <h5>Standard Bank Angola</h5>
                        <div class="partner-meta">
                            <small>Área: Bancassurance</small><br>
                            <small>Ano de início: 2024</small>
                        </div>
                        <p>Colaboração estratégica para distribuição de seguros através da rede bancária do Standard Bank, com o objectivo de aumentar a penetração de seguros no cliente bancário.</p>
                        <a href="#" class="btn-partner">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <!-- Parceria 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="partner-card">
                    <img src="/imagens/parcerias/telecom-angola-logo.png" alt="Telecom Angola" class="partner-logo">
                    <div class="partner-content">
                        <h5>Telecom Angola</h5>
                        <div class="partner-meta">
                            <small>Área: Serviços Digitais & Seguros Móveis</small><br>
                            <small>Ano de início: 2025</small>
                        </div>
                        <p>Parceria para oferta de seguros através de plataformas móveis e integração de serviços seguros nos pacotes de telecomunicações.</p>
                        <a href="#" class="btn-partner">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <!-- Parceria 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="partner-card">
                    <img src="/imagens/parcerias/universidade-agostinho-neto-logo.png" alt="Universidade Agostinho Neto" class="partner-logo">
                    <div class="partner-content">
                        <h5>Universidade Agostinho Neto</h5>
                        <div class="partner-meta">
                            <small>Área: Educação & Formação</small><br>
                            <small>Ano de início: 2023</small>
                        </div>
                        <p>Parceria académica para programas de formação em seguros, estágios para estudantes e desenvolvimento de talento para o sector segurador.</p>
                        <a href="#" class="btn-partner">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <!-- Pode adicionar mais col-div para mais parcerias -->

        </div>
    </div>
</div>
@endsection
