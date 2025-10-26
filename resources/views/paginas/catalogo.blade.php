@extends('layout.inicio')

@section('title', 'Catálogo | SanlamAllianz')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #003399;
        --bg-light: #f8f9fa;
        --text-color: #333;
    }
    body { background: var(--bg-light); color: var(--text-color); }
    .catalogue-container {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
    }
    .section-title {
        color: var(--primary-color);
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 30px;
        text-align: center;
    }
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }
    .product-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: transform 0.2s ease;
    }
    .product-card:hover {
        transform: translateY(-4px);
    }
    .product-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .product-card .content {
        padding: 15px;
    }
    .product-card h5 {
        color: var(--accent-color);
        font-size: 1.1rem;
        margin-bottom: 10px;
    }
    .product-card p {
        font-size: 0.95rem;
        margin-bottom: 12px;
    }
    .product-card .btn-learn {
        display: inline-block;
        padding: 8px 12px;
        background: var(--primary-color);
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 0.9rem;
    }
</style>

<div class="catalogue-container">
    <h2 class="section-title">Nosso Catálogo de Produtos</h2>

    <div class="product-grid">
        <!-- Exemplo de produto -->
        <div class="product-card">
            <img src="https://via.placeholder.com/400x180.png?text=Seguro+Vida" alt="Seguro Vida">
            <div class="content">
                <h5>Seguro Vida</h5>
                <p>Proteção completa para si e para a sua família, com cobertura em vida e invalidez.</p>
                <a class="btn-learn" href="/produto/seguro-vida">Saiba mais</a>
            </div>
        </div>

        <div class="product-card">
            <img src="https://via.placeholder.com/400x180.png?text=Seguro+Automóvel" alt="Seguro Automóvel">
            <div class="content">
                <h5>Seguro Automóvel</h5>
                <p>Cobertura contra danos, roubos e responsabilidades civis do seu veículo.</p>
                <a class="btn-learn" href="/produto/seguro-automovel">Saiba mais</a>
            </div>
        </div>

        <div class="product-card">
            <img src="https://via.placeholder.com/400x180.png?text=Seguro+Casa" alt="Seguro Casa">
            <div class="content">
                <h5>Seguro Habitação</h5>
                <p>Protege a sua residência contra incêndio, roubo, danos elétricos e muito mais.</p>
                <a class="btn-learn" href="/produto/seguro-habitacao">Saiba mais</a>
            </div>
        </div>

        <!-- Adicione aqui mais produtos conforme necessário -->
    </div>
</div>

@endsection
