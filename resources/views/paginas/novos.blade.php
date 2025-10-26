@extends('layout.inicio')

@section('title', 'Novos Colaboradores | SanlamAllianz Angola')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #0072CE;
        --bg-light: #f4f7fb;
        --text-color: #333;
    }

    .team-section {
        background: var(--bg-light);
        padding: 70px 20px;
        text-align: center;
        position: relative;
    }

    .team-section h2 {
        color: var(--primary-color);
        font-weight: 800;
        margin-bottom: 15px;
        font-size: 2.2rem;
    }

    .team-section p {
        color: #555;
        font-size: 1rem;
        max-width: 750px;
        margin: 0 auto 50px;
    }

    .carousel-inner {
        padding-bottom: 30px;
    }

    .member-card {
        background: white;
        border-radius: 18px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        text-align: left;
        transition: all 0.4s ease;
        margin: 10px;
        cursor: pointer;
    }

    .member-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 82, 155, 0.25);
    }

    .member-card img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        transition: 0.4s;
    }

    .member-card:hover img {
        transform: scale(1.05);
    }

    .member-info {
        padding: 20px;
        position: relative;
    }

    .member-info h5 {
        color: var(--accent-color);
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 1.1rem;
    }

    .member-info p {
        color: var(--text-color);
        margin: 0;
        font-size: 0.95rem;
    }

    .member-meta {
        margin-top: 6px;
        font-size: 0.9rem;
        color: gray;
    }

    .member-bio {
        font-size: 0.9rem;
        color: #555;
        border-top: 1px solid #eee;
        padding-top: 12px;
        margin-top: 10px;
        line-height: 1.5;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 4%;
        transition: all 0.3s ease;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .member-card img {
            height: 200px;
        }
    }
</style>

<div class="team-section">
    <h2>Novos Colaboradores</h2>
    <p>Conheça os novos talentos que se juntaram à <strong>SanlamAllianz Angola</strong>, trazendo energia, inovação e compromisso para fortalecer a nossa missão.</p>

    <div id="newTeamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/sara-matos.jpg" alt="Sara Matos">
                            <div class="member-info">
                                <h5>Sara Matos</h5>
                                <p>Analista de Risco</p>
                                <div class="member-meta">
                                    <small>Departamento: Financeiro</small><br>
                                    <small>Data de Entrada: Setembro 2025</small>
                                </div>
                                <div class="member-bio">
                                    Sara junta-se à equipa financeira com foco em avaliação de risco e melhoria contínua dos processos de compliance.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/paulo-ferreira.jpg" alt="Paulo Ferreira">
                            <div class="member-info">
                                <h5>Paulo Ferreira</h5>
                                <p>Técnico de Seguros</p>
                                <div class="member-meta">
                                    <small>Departamento: Operações</small><br>
                                    <small>Data de Entrada: Agosto 2025</small>
                                </div>
                                <div class="member-bio">
                                    Paulo é responsável pelo suporte técnico às operações de seguros e reforça o compromisso com a excelência operacional.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/lina-fernandes.jpg" alt="Lina Fernandes">
                            <div class="member-info">
                                <h5>Lina Fernandes</h5>
                                <p>Gestora de Comunicação Interna</p>
                                <div class="member-meta">
                                    <small>Departamento: Comunicação</small><br>
                                    <small>Data de Entrada: Julho 2025</small>
                                </div>
                                <div class="member-bio">
                                    Lina traz experiência em comunicação corporativa e será peça-chave no fortalecimento da cultura SanlamAllianz.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/mauro-costa.jpg" alt="Mauro Costa">
                            <div class="member-info">
                                <h5>Mauro Costa</h5>
                                <p>Engenheiro de Sistemas</p>
                                <div class="member-meta">
                                    <small>Departamento: Tecnologia</small><br>
                                    <small>Data de Entrada: Julho 2025</small>
                                </div>
                                <div class="member-bio">
                                    Mauro integra a equipa de TI com foco em inovação tecnológica e automação de processos internos.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/rita-lopes.jpg" alt="Rita Lopes">
                            <div class="member-info">
                                <h5>Rita Lopes</h5>
                                <p>Consultora Comercial</p>
                                <div class="member-meta">
                                    <small>Departamento: Vendas</small><br>
                                    <small>Data de Entrada: Junho 2025</small>
                                </div>
                                <div class="member-bio">
                                    Rita junta-se à equipa comercial com o objetivo de aproximar ainda mais a SanlamAllianz dos seus clientes e parceiros.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/david-tavares.jpg" alt="David Tavares">
                            <div class="member-info">
                                <h5>David Tavares</h5>
                                <p>Assistente de Recursos Humanos</p>
                                <div class="member-meta">
                                    <small>Departamento: RH</small><br>
                                    <small>Data de Entrada: Maio 2025</small>
                                </div>
                                <div class="member-bio">
                                    David apoia o desenvolvimento e integração dos colaboradores, promovendo um ambiente de trabalho positivo e colaborativo.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/julia-gomes.jpg" alt="Júlia Gomes">
                            <div class="member-info">
                                <h5>Júlia Gomes</h5>
                                <p>Jurista</p>
                                <div class="member-meta">
                                    <small>Departamento: Jurídico</small><br>
                                    <small>Data de Entrada: Abril 2025</small>
                                </div>
                                <div class="member-bio">
                                    Júlia integra a área jurídica, reforçando o compromisso da SanlamAllianz com a transparência e conformidade legal.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="member-card">
                            <img src="/imagens/colaboradores/nuno-sousa.jpg" alt="Nuno Sousa">
                            <div class="member-info">
                                <h5>Nuno Sousa</h5>
                                <p>Analista de Dados</p>
                                <div class="member-meta">
                                    <small>Departamento: Estratégia</small><br>
                                    <small>Data de Entrada: Março 2025</small>
                                </div>
                                <div class="member-bio">
                                    Nuno traz uma nova visão analítica e contribuirá para decisões baseadas em dados e indicadores estratégicos.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newTeamCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newTeamCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Seguinte</span>
        </button>
    </div>
</div>
@endsection
