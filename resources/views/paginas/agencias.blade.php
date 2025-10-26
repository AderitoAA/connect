@extends('layout.inicio')

@section('title', 'Agências | SanlamAllianz')

@section('content')
<style>
    :root {
        --primary-color: #00529B;
        --accent-color: #FDB913;
        --bg-light: #f9fafc;
        --text-dark: #333;
    }

    body { background-color: var(--bg-light); color: var(--text-dark); }
    h3 { color: var(--primary-color); }
    .card { border: 1px solid #e0e0e0; border-radius: 10px; }
    .card-header { background-color: var(--primary-color) !important; color: #fff !important; font-weight: 600; }
    .btn-primary, .form-select { border-radius: 8px; }
    .form-select:focus { border-color: var(--accent-color); box-shadow: 0 0 0 0.2rem rgba(253, 185, 19, 0.25); }
    table thead { background-color: var(--primary-color); color: white; }
    table tbody tr:hover { background-color: rgba(0, 82, 155, 0.08); cursor: pointer; }
    #map { border: 2px solid var(--primary-color); border-radius: 10px; height: 400px; width: 100%; }
</style>

<div class="container py-4">
    <h3 class="text-center mb-4 fw-bold">As Nossas Agências</h3>

    <!-- FILTRO -->
    <div class="card p-3 shadow-sm mb-4">
        <form id="filtroAgencias" class="row g-3">
            <div class="col-md-4">
                <label for="provincia" class="form-label fw-semibold">Filtrar por Província</label>
                <select id="provincia" class="form-select">
                    <option value="">Todas</option>
                    <option value="Luanda">Luanda</option>
                    <option value="Benguela">Benguela</option>
                    <option value="Huíla">Huíla</option>
                </select>
            </div>
        </form>
    </div>

    <!-- MAPA -->
    <div id="map" class="shadow-sm mb-4"></div>

    <!-- LISTA DE AGÊNCIAS -->
    <div class="card shadow-sm">
        <div class="card-header">Lista de Agências</div>
        <div class="card-body">
            <table class="table table-hover align-middle" id="tabelaAgencias">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Província</th>
                        <th>Telefone</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-provincia="Luanda" data-nome="Agência Maianga"><td>Agência Maianga</td><td>Av. Ho Chi Minh, nº 45</td><td>Luanda</td><td>+244 937 116 096</td><td>08h00 - 15h30</td></tr>
                    <tr data-provincia="Luanda" data-nome="Agência Talatona"><td>Agência Talatona</td><td>Belas Shopping</td><td>Luanda</td><td>+244 937 116 096</td><td>08h00 - 15h30</td></tr>
                    <tr data-provincia="Benguela" data-nome="Agência Benguela"><td>Agência Benguela</td><td>Av. Dr. António Agostinho Neto</td><td>Benguela</td><td>+244 937 116 096</td><td>08h00 - 15h30</td></tr>
                    <tr data-provincia="Huíla" data-nome="Agência Lubango"><td>Agência Lubango</td><td>Rua da Liberdade</td><td>Huíla</td><td>+244 937 116 096</td><td>08h00 - 15h30</td></tr>
                    <tr data-provincia="Huíla" data-nome="Agência Lubango"><td>Agência Kero Morro Bento</td><td>Xyami Morro Bento</td><td>Luanda</td><td>+244 937 116 096</td><td>08h00 - 15h30</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- LEAFLET -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

<script>
document.addEventListener('DOMContentLoaded', function () {
    const agencias = [
        { nome: "Agência Maianga", coords: [-8.823042711099273, 13.229688707891654], provincia: "Luanda" },
        { nome: "Agência Talatona", coords: [-8.919861013601722, 13.192345703063607], provincia: "Luanda" },
        { nome: "Agência Kero Morro Bento", coords: [-8.892514903526553, 13.195733742328722], provincia: "Luanda" },
        { nome: "Agência Veredas das Flores", coords: [-8.97205680609258, 13.297172942328723], provincia: "Luanda" },
        { nome: "Agência Benguela", coords: [-12.596701130471812, 13.383931468324256], provincia: "Benguela" },
        { nome: "Agência Lubango", coords: [-14.9175, 13.4925], provincia: "Huíla" },
    ];

    const map = L.map('map').setView([-11.2027, 17.8739], 6);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '© OpenStreetMap contributors' }).addTo(map);

    const markers = L.markerClusterGroup();
    const markerMap = {}; 

    // Ícones padrão e destaque
    const defaultIcon = L.icon({ iconUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png', iconSize: [25, 41], iconAnchor: [12, 41] });
    const highlightIcon = L.icon({ iconUrl: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png', iconSize: [30, 45], iconAnchor: [15, 45] });

    function adicionarMarcadores(filtro = '') {
        markers.clearLayers();
        const latlngsVisiveis = [];
        agencias.forEach(a => {
            if (!filtro || a.provincia.toLowerCase() === filtro.toLowerCase()) {
                const marker = L.marker(a.coords, { icon: defaultIcon });
                marker.bindPopup(`
                    <b>${a.nome}</b><br>${a.provincia}<br>
                    <a href="https://www.google.com/maps/search/?api=1&query=${a.coords[0]},${a.coords[1]}" target="_blank">Ver no Google Maps</a>
                `);
                markers.addLayer(marker);
                markerMap[a.nome] = marker;
                latlngsVisiveis.push(marker.getLatLng());
            }
        });
        map.addLayer(markers);

        // Centralizar mapa nos marcadores visíveis
        if(latlngsVisiveis.length) {
            const bounds = L.latLngBounds(latlngsVisiveis);
            map.fitBounds(bounds, { padding: [50, 50] });
        }
    }

    adicionarMarcadores();

    // Filtro de província
    document.getElementById('provincia').addEventListener('change', function () {
        const filtro = this.value;
        document.querySelectorAll('#tabelaAgencias tbody tr').forEach(tr => {
            tr.style.display = (!filtro || tr.dataset.provincia === filtro) ? '' : 'none';
        });
        adicionarMarcadores(filtro);
    });

    // Ao clicar na tabela centraliza e destaca o marker + scroll suave
    document.querySelectorAll('#tabelaAgencias tbody tr').forEach(tr => {
        tr.addEventListener('click', function () {
            const nome = this.dataset.nome;
            const marker = markerMap[nome];
            if (marker) {
                map.setView(marker.getLatLng(), 14, { animate: true });
                marker.openPopup();

                // Destacar temporariamente
                marker.setIcon(highlightIcon);
                setTimeout(() => marker.setIcon(defaultIcon), 2000);

                // Scroll suave da linha clicada para o centro da tabela
                this.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    });
});
</script>
@endsection




