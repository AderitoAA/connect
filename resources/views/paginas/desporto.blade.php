@extends('layout.inicio')

@section('title', 'Desporto | SanlamAllianz Angola')

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
        margin-bottom: 30px;
        text-align: center;
    }

    .sports-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .sport-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .sport-card:hover {
        transform: translateY(-5px);
    }

    .sport-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .sport-card .content {
        padding: 15px;
    }

    .sport-card h5 {
        color: var(--accent-color);
        font-weight: 700;
        margin-bottom: 8px;
    }

    .sport-card p {
        font-size: 0.95rem;
        color: var(--text-color);
    }
</style>

<div class="container mt-5 mb-5">
    <h2 class="section-title">SanlamAllianz e o Desporto</h2>

    <div class="sports-container">
        <!-- Maratona -->
        <div class="sport-card">
            <img src="https://capetownmarathon.com/wp-content/uploads/2024/09/Untitled-design-5.png" alt="Maratona SanlamAllianz">
            <div class="content">
                <h5>Maratona - Cape Town Marathon</h5>
                <p>A SanlamAllianz patrocinou atletas africanos na prestigiada <b>Cape Town Marathon</b>, reforçando o apoio ao atletismo e à inclusão no desporto continental.</p>
            </div>
        </div>

        <!-- Taekwondo -->
        <div class="sport-card">
            <img src="https://www.sanlamallianz.com/uploads/images/faycal.jpg" alt="Taekwondo">
            <div class="content">
                <h5>Taekwondo - Faysal Sawadogo</h5>
                <p>Em parceria com a Allianz, a SanlamAllianz apoia o atleta africano <b>Faysal Sawadogo</b>, número 1 do Taekwondo em África, destacando o compromisso com o desporto de alto rendimento.</p>
            </div>
        </div>

        <!-- Jogos Olímpicos -->
        <div class="sport-card">
            <img src="https://www.allianzlife.com/-/media/Images/Allianz/Social/social-azl-olympic-logo.jpg" alt="Jogos Olímpicos">
            <div class="content">
                <h5>Jogos Olímpicos e Paralímpicos</h5>
                <p>A SanlamAllianz está presente nos <b>Jogos Olímpicos e Paralímpicos</b> através da parceria com a Allianz, inspirando atletas e comunidades em todo o mundo.</p>
            </div>
        </div>
    </div>
</div>
@endsection
