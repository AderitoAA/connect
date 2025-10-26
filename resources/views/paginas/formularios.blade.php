@extends('layout.inicio')

@section('title', 'Formulários | SanlamAllianz')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #003399;
        --bg-light: #f8f9fa;
        --text-color: #333;
    }
    body { background: var(--bg-light); color: var(--text-color); }
    .forms-container {
        max-width: 1000px;
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
    .form-list {
        list-style: none;
        padding: 0;
    }
    .form-list li {
        background: white;
        border-radius: 8px;
        padding: 15px 20px;
        margin-bottom: 15px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .form-list li .form-info {
        flex: 1;
    }
    .form-list li a.btn-download {
        padding: 8px 12px;
        background: var(--accent-color);
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 0.9rem;
    }
</style>

<div class="forms-container">
    <h2 class="section-title">Formulários Disponíveis</h2>
    <ul class="form-list">
        <!-- Formulário exemplo 1 -->
        <li>
            <div class="form-info">
                <strong>Education Plan Proposal Form (Rwanda)</strong><br>
                Formulário de proposta para plano de educação.
            </div>
            <a class="btn-download" href="https://rw.sanlamallianz.com/life-insurance/customer-care/EducationPlanProposalForm.pdf" target="_blank">Download</a>
        </li>
        <!-- Formulário exemplo 2 -->
        <li>
            <div class="form-info">
                <strong>Retirement Proposal Form (Rwanda)</strong><br>
                Formulário de proposta para plano de aposentadoria.
            </div>
            <a class="btn-download" href="https://rw.sanlamallianz.com/life-insurance/customer-care/RetirementProposalForm.pdf" target="_blank">Download</a>
        </li>
        <!-- Formulário exemplo 3 -->
        <li>
            <div class="form-info">
                <strong>Funeral Proposal Form (Rwanda)</strong><br>
                Formulário de proposta para benefício funerário.
            </div>
            <a class="btn-download" href="https://rw.sanlamallianz.com/life-insurance/customer-care/FuneralProposalForm.pdf" target="_blank">Download</a>
        </li>
        <!-- Formulário exemplo 4 -->
        <li>
            <div class="form-info">
                <strong>Worker’s Group Life Insurance Proposal Form (Rwanda)</strong><br>
                Formulário de proposta para seguro de vida em grupo de trabalhadores.
            </div>
            <a class="btn-download" href="https://rw.sanlamallianz.com/life-insurance/customer-care/WorkersGroupLifeInsuranceProposalForm.pdf" target="_blank">Download</a>
        </li>
        <!-- Formulário exemplo 5 -->
        <li>
            <div class="form-info">
                <strong>Update Your Information Form (Nigeria)</strong><br>
                Formulário para atualizar os seus dados de cliente.
            </div>
            <a class="btn-download" href="https://sanlamallianz.com.ng/self-service/update-your-information" target="_blank">Acessar</a>
        </li>
        <!-- MORE FORMULÁRIOS AINDA PENDENTES DE COLETA -->
    </ul>
</div>
@endsection
