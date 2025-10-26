@extends('layout.inicio')

@section('title', 'Dados e Relatórios | SanlamAllianz')

@section('content')

</header>

<main class="container my-5">
    <h2 class="fw-bold text-primary text-center mb-4">Painel de Dados Corporativos</h2>
    <p class="text-center text-muted mb-5">
        Aqui estão alguns indicadores-chave de desempenho (KPIs) e estatísticas operacionais da SanlamAllianz.
    </p>

    <!-- Indicadores rápidos -->
    <div class="row g-4 text-center">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 py-4">
                <h3 class="text-primary fw-bold">1.250</h3>
                <p class="text-muted">Apólices Ativas</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 py-4">
                <h3 class="text-success fw-bold">+320</h3>
                <p class="text-muted">Clientes Corporativos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 py-4">
                <h3 class="text-warning fw-bold">98%</h3>
                <p class="text-muted">Satisfação do Cliente</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 py-4">
                <h3 class="text-danger fw-bold">12</h3>
                <p class="text-muted">Sinistros Pendentes</p>
            </div>
        </div>
    </div>

    <!-- Secção de gráfico ilustrativo -->
    <section class="mt-5">
        <h4 class="fw-bold text-primary text-center mb-3">Evolução de Apólices 2023-2025</h4>
        <div class="text-center bg-light border rounded p-5">
            <img src="{{ asset('img/graph_country.png') }}" alt="Gráfico de Relatórios" class="img-fluid rounded shadow-sm" style="max-width:600px;">
            <p class="text-muted mt-3">(Gráfico ilustrativo — crescimento constante ao longo dos anos)</p>
        </div>
    </section>

    <!-- Secção de texto analítico -->
    <section class="mt-5">
        <h4 class="fw-bold text-primary mb-3">Resumo Analítico</h4>
        <p class="text-secondary">
            A SanlamAllianz apresentou crescimento sólido nos últimos dois anos, com destaque para o aumento de 20% nas apólices de vida e 15% em seguros automóveis.
            O índice de satisfação dos clientes manteve-se acima de 95%, consolidando a posição da empresa como referência no setor segurador.
        </p>
        <p class="text-secondary">
            O foco para o próximo período será a digitalização total dos processos internos e a integração de novos serviços automatizados na intranet corporativa.
        </p>
    </section>

    <!-- Secção final -->
    <section class="mt-5 text-center">
        <h5 class="fw-bold text-primary">Última atualização: Outubro 2025</h5>
        <p class="text-muted">Departamento de Estratégia e Inovação - SanlamAllianz Angola</p>
    </section>
</main>
@endsection
