@extends('layout.inicio')

@section('title', 'A Nossa Equipa | SanlamAllianz Angola')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #003399;
        --bg-light: #f9fafc;
        --text-color: #333;
        --card-bg: #fff;
    }

    /* === HEADER === */
    .team-header {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-align: center;
        padding: 90px 20px 70px;
    }

    .team-header h1 {
        font-weight: 800;
        font-size: 2.7rem;
    }

    .team-header p {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 700px;
        margin: 10px auto 0;
    }

    /* === FILTROS === */
    .filter-buttons {
        text-align: center;
        margin: 40px 0 20px;
    }

    .filter-buttons button {
        background: var(--primary-color);
        color: #fff;
        border: none;
        border-radius: 25px;
        margin: 6px;
        padding: 10px 22px;
        font-weight: 500;
        transition: 0.3s ease;
    }

    .filter-buttons button:hover,
    .filter-buttons button.active {
        background: var(--accent-color);
        transform: scale(1.05);
    }

    /* === GRID === */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        padding: 0 20px 80px;
        justify-items: center;
    }

    .team-card {
        width: 100%;
        background: var(--card-bg);
        border-radius: 18px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        position: relative;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0,0,0,0.15);
    }

    .team-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        transition: 0.4s ease;
    }

    .team-card:hover img {
        filter: brightness(0.9);
    }

    .team-info {
        padding: 18px;
        text-align: center;
    }

    .team-info h5 {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 6px;
    }

    .team-info p {
        color: #555;
        font-size: 0.95rem;
        margin-bottom: 5px;
    }

    .team-info small {
        color: #888;
    }

    /* === DETALHES EXPANDIDOS === */
    .team-details {
        max-height: 0;
        overflow: hidden;
        background: #f1f5fb;
        transition: max-height 0.6s ease, padding 0.4s ease;
        padding: 0 20px;
    }

    .team-card.expanded .team-details {
        max-height: 250px;
        padding: 20px;
    }

    .team-details p {
        color: #444;
        text-align: justify;
        font-size: 0.95rem;
        margin: 0;
    }

    .social-icons {
        text-align: center;
        margin-top: 10px;
    }

    .social-icons a {
        color: var(--primary-color);
        margin: 0 6px;
        font-size: 1.2rem;
        transition: 0.3s ease;
    }

    .social-icons a:hover {
        color: var(--accent-color);
    }

    .arrow-toggle {
        position: absolute;
        bottom: 10px;
        right: 15px;
        font-size: 1.4rem;
        color: var(--primary-color);
        transition: 0.4s;
    }

    .team-card.expanded .arrow-toggle {
        transform: rotate(180deg);
        color: var(--accent-color);
    }
</style>

<!-- HEADER -->
<section class="team-header" data-aos="fade-down">
    <h1>A Nossa Equipa</h1>
    <p>Conheça os profissionais que fazem da SanlamAllianz Angola uma referência de excelência, inovação e confiança.</p>
</section>

<!-- FILTROS -->
<div class="filter-buttons" data-aos="fade-up">
    <button class="filter-btn active" data-filter="all">Todos</button>
    <button class="filter-btn" data-filter="executivo">Direção Executiva</button>
    <button class="filter-btn" data-filter="financeiro">Financeiro</button>
    <button class="filter-btn" data-filter="comercial">Comercial</button>
    <button class="filter-btn" data-filter="rh">Recursos Humanos</button>
</div>

<!-- GRID DE EQUIPA -->
<section class="team-grid">

    <!-- Exemplo: Direção Executiva -->
    <div class="team-card" data-category="executivo" data-aos="fade-up">
        <img src="/imagens/equipa/joao-pires.jpg" alt="João Pires">
        <div class="team-info">
            <h5>João Pires</h5>
            <p>Diretor Executivo</p>
            <small>Gestão Corporativa</small>
        </div>
        <div class="arrow-toggle"><i class="bi bi-chevron-down"></i></div>
        <div class="team-details">
            <p>Com mais de 15 anos de experiência no setor financeiro, João é responsável pela estratégia corporativa e pela liderança executiva da SanlamAllianz Angola. É defensor da inovação e da excelência no atendimento ao cliente.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <div class="team-card" data-category="executivo" data-aos="fade-up">
        <img src="/imagens/equipa/maria-andrade.jpg" alt="Maria Andrade">
        <div class="team-info">
            <h5>Maria Andrade</h5>
            <p>Diretora de Operações</p>
            <small>Gestão de Serviços</small>
        </div>
        <div class="arrow-toggle"><i class="bi bi-chevron-down"></i></div>
        <div class="team-details">
            <p>Maria lidera o departamento de operações com foco em eficiência e qualidade. Apaixonada por processos sustentáveis e gestão de equipas multidisciplinares.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Outros departamentos -->
    <div class="team-card" data-category="financeiro" data-aos="fade-up">
        <img src="/imagens/equipa/carlos-matos.jpg" alt="Carlos Matos">
        <div class="team-info">
            <h5>Carlos Matos</h5>
            <p>Gestor Financeiro</p>
            <small>Controlo Interno</small>
        </div>
        <div class="arrow-toggle"><i class="bi bi-chevron-down"></i></div>
        <div class="team-details">
            <p>Carlos supervisiona todas as atividades financeiras e contábeis, garantindo a transparência e sustentabilidade financeira da empresa.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <div class="team-card" data-category="comercial" data-aos="fade-up">
        <img src="/imagens/equipa/paula-fernandes.jpg" alt="Paula Fernandes">
        <div class="team-info">
            <h5>Paula Fernandes</h5>
            <p>Gestora de Clientes</p>
            <small>Vendas e Distribuição</small>
        </div>
        <div class="arrow-toggle"><i class="bi bi-chevron-down"></i></div>
        <div class="team-details">
            <p>Paula é especialista em relacionamento com clientes e estratégias de crescimento comercial. Conduz iniciativas de fidelização e desenvolvimento de novos mercados.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({ duration: 900, once: true });

// Filtro
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        document.querySelectorAll('.team-card').forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'block';
                setTimeout(() => card.style.opacity = 1, 150);
            } else {
                card.style.opacity = 0;
                setTimeout(() => card.style.display = 'none', 150);
            }
        });
    });
});

// Expandir cards
document.querySelectorAll('.team-card').forEach(card => {
    card.addEventListener('click', e => {
        if (!e.target.closest('.social-icons')) {
            card.classList.toggle('expanded');
        }
    });
});
</script>
@endsection
