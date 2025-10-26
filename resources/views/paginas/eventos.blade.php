@extends('layout.inicio')

@section('title', 'Eventos | SanlamAllianz Angola')

@section('content')
<style>
    :root {
        --primary: #00529B;
        --accent: #003399;
        --bg: #f8f9fa;
    }

    body { background: var(--bg); }
    .event-card { border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
    .event-card img { width: 100%; height: 180px; object-fit: cover; }
    .hero { background: linear-gradient(90deg, rgba(0,82,155,0.1), rgba(0,51,153,0.05)); padding: 25px; border-radius: 12px; }
    .badge-cat { position: absolute; top: 10px; right: 10px; background: var(--primary); }
    #map { height: 300px; border-radius: 10px; }
</style>

<div class="container my-4">
    <div class="row g-4">
        <!-- Lista de eventos -->
        <div class="col-lg-8">
            <div class="hero mb-3 d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="mb-0">Próximos Eventos</h2>
                    <small class="text-muted">Fique por dentro de tudo o que acontece.</small>
                </div>
                <a href="#" class="btn btn-outline-primary">Publicar Evento</a>
            </div>

            <div class="row g-3" id="eventList">
                <!-- eventos inseridos via JS -->
            </div>
        </div>

        <!-- Coluna lateral -->
        <div class="col-lg-4">
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h6>Mapa</h6>
                    <div id="map"></div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Contactos</h6>
                    <p class="small text-muted mb-0">
                        Luanda, Angola<br>
                        apoioaocliente@ao.sanlamallianz.com<br>
                        Tel: (+244) 937 116 096
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalhes do Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalContent">Carregando...</div>
        </div>
    </div>
</div>

<!-- Dependências -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Eventos de exemplo
    const events = [
        {
            id: 1,
            title: "Evento Interno | Outubro Rosa",
            date: "2025-10-24",
            venue: "Inara Business Park & Gardens, às 10h:00 no 5º Piso",
            price: "Grátis",
            description: "No âmbito das acções de sensibilização, levadas a cabo no Outubro Rosa, os Departamentos de Saúde, Marketing e Recursos Humanos têm o prazer de convidar todas as mulheres da SanlamAllianz para uma palestra especial dedicada à Prevenção do Cancro da Mama.",
            image: "{{ asset('img/image003.png') }}",
            lat: -8.919818708837777,
            lng: 13.192385047838709,
        },
        {
            id: 2,
            title: "CONNECT 10- OKTOBERFEST LUANDA 2025",
            date: "2025-10-18",
            venue: "Epic Sana",
            price: "Grátis",
            description: "Como forma de proporcionar uma experiência diferente, estamos a oferecer bilhetes para o Oktoberfest Luanda 2025, que terá lugar no dia 18 de Outubro (sábado), pelas 19:30 no Epic Sana, em Luanda.",
            image: "{{ asset('img/OKTOBERFEST.svg') }}",
            lat: -8.814326344998703,
            lng: 13.235052439486333
        },
        {
            id: 3,
            title: "Conferência de Imprensa",
            date: "2025-09-26",
            venue: "Edifício SanlamAllianz",
            price: "Grátis",
            description: "A SanlamAllianz apresentou hoje, em Conferência de Imprensa realizada no Edifício SanlamAllianz, em Talatona, o seu novo embaixador da marca: o basquetebolista Childe Dundão.",
            image: "{{ asset('img/Conferência de Imprensa _ Dundão 1.svg') }}",
            lat: -8.919818708837777,
            lng: 13.192385047838709,
        }
    ];

    // Mostrar eventos
    const container = document.getElementById("eventList");
    events.forEach(ev => {
        const mapsLink = `https://www.google.com/maps?q=${ev.lat},${ev.lng}`;
        const card = document.createElement("div");
        card.className = "col-md-6";
        card.innerHTML = `
            <div class="card event-card">
                <div class="position-relative">
                    <img src="${ev.image}" alt="${ev.title}">
                    <span class="badge badge-cat bg-primary">Evento</span>
                </div>
                <div class="card-body">
                    <h5>${ev.title}</h5>
                    <p class="text-muted small mb-2">${new Date(ev.date).toLocaleDateString()} • ${ev.venue}</p>
                    <p class="small">${ev.description.substring(0, 80)}...</p>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="fw-bold">${ev.price}</span>
                        <div>
                            <a href="${mapsLink}" target="_blank" class="btn btn-sm btn-outline-success me-2">Ver no mapa</a>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#eventModal" onclick="showDetails(${ev.id})">Ver</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        container.appendChild(card);
    });

    // Modal detalhes
    function showDetails(id) {
        const ev = events.find(e => e.id === id);
        const mapsLink = `https://www.google.com/maps?q=${ev.lat},${ev.lng}`;
        const modal = document.getElementById("modalContent");
        modal.innerHTML = `
            <h4>${ev.title}</h4>
            <p class="text-muted">${new Date(ev.date).toLocaleDateString()} • ${ev.venue}</p>
            <img src="${ev.image}" style="width:100%;border-radius:8px;margin-bottom:12px;">
            <p>${ev.description}</p>
            <p><strong>Preço:</strong> ${ev.price}</p>
            <a href="${mapsLink}" target="_blank" class="btn btn-outline-success mt-2">Abrir no Google Maps</a>
        `;
    }

    // Mapa
    const map = L.map('map').setView([-8.84, 13.23], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    events.forEach(ev => {
        const mapsLink = `https://www.google.com/maps?q=${ev.lat},${ev.lng}`;
        L.marker([ev.lat, ev.lng])
            .addTo(map)
            .bindPopup(`<b>${ev.title}</b><br>${ev.venue}<br><a href='${mapsLink}' target='_blank'>Ver no Google Maps</a>`);
    });
</script>
@endsection




