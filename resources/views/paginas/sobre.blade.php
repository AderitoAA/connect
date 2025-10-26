@extends('layout.inicio')

@section('title', 'Sobre Nós | SanlamAllianz')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #003399;
        --bg-light: #f8f9fa;
        --text-color: #333;
    }

    .section-title {
        color: var(--primary-color);
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-left: 6px solid var(--accent-color);
        padding-left: 10px;
    }

    .sobre-container {
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 40px;
    }

    .sobre-text {
        color: var(--text-color);
        line-height: 1.7;
        font-size: 16px;
    }

    .icon {
        color: var(--accent-color);
        font-size: 28px;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .sobre-container {
            padding: 20px;
        }
    }
</style>

<div class="container py-4">
    <h3 class="text-center fw-bold text-primary mb-5">Sobre Nós</h3>

    <!-- QUEM SOMOS -->
    <div class="sobre-container">
        <h5 class="section-title"><i class="bi bi-people-fill icon"></i>Quem Somos</h5>
        <p class="sobre-text">
            A <strong>SanlamAllianz</strong> é uma companhia líder no setor segurador, resultado da parceria entre dois grupos de referência internacional — Sanlam e Allianz.  
            Unimos experiência, inovação e compromisso para oferecer soluções de proteção financeira que promovem segurança, confiança e crescimento sustentável aos nossos clientes e parceiros.
        </p>
    </div>

    <!-- MISSÃO -->
    <div class="sobre-container">
        <h5 class="section-title"><i class="bi bi-bullseye icon"></i>Missão</h5>
        <p class="sobre-text">
            Proteger o futuro das pessoas e organizações, oferecendo serviços e produtos de seguro inovadores, acessíveis e sustentáveis, que garantam tranquilidade e confiança em cada momento da vida.
        </p>
    </div>

    <!-- VISÃO -->
    <div class="sobre-container">
        <h5 class="section-title"><i class="bi bi-eye-fill icon"></i>Visão</h5>
        <p class="sobre-text">
            Ser a seguradora de referência em Angola, reconhecida pela excelência no atendimento, pela inovação nas soluções e pelo impacto positivo na vida dos nossos clientes e comunidades.
        </p>
    </div>

    <!-- VALORES -->
    <div class="sobre-container">
        <h5 class="section-title"><i class="bi bi-heart-fill icon"></i>Valores</h5>
        <ul class="sobre-text">
            <li><strong>Integridade:</strong> Atuamos com ética, transparência e responsabilidade em todas as nossas ações.</li>
            <li><strong>Respeito:</strong> Valorizamos a diversidade, a inclusão e o bem-estar das pessoas.</li>
            <li><strong>Inovação:</strong> Buscamos constantemente novas soluções para responder às necessidades dos nossos clientes.</li>
            <li><strong>Excelência:</strong> Comprometemo-nos com a qualidade e a melhoria contínua dos nossos serviços.</li>
            <li><strong>Compromisso:</strong> Construímos relações duradouras baseadas na confiança e na responsabilidade social.</li>
        </ul>
    </div>
</div>
@endsection
