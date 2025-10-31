<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Mostrar o dashboard com métricas e listas rápidas.
     */
    public function index(Request $request)
    {
        // Métricas principais
        $totalUsuarios = DB::table('usuarios')->count();
        $totalNoticias = DB::table('noticias')->where('publicado', 1)->count();
        $totalAgencias = DB::table('agencias')->count();
        $totalDocumentos = DB::table('documentos')->where('publico', 1)->count();
        $openTickets = DB::table('pedidos_servicedesk')->where('status', 'aberto')->count();

        // Últimas notícias
        $recentNoticias = DB::table('noticias')
            ->select('id', 'titulo', 'resumo', 'imagem_capa_url', 'data_publicacao')
            ->whereNotNull('data_publicacao')
            ->orderBy('data_publicacao', 'desc')
            ->limit(5)
            ->get();

        // Próximos eventos
        $eventsUpcoming = DB::table('eventos')
            ->where('data_inicio', '>=', Carbon::now())
            ->orderBy('data_inicio')
            ->limit(5)
            ->get();

        // Dados para gráfico: notícias por dia (últimos 7 dias)
        $labels = [];
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $labels[] = $date->format('d/m');
            $data[] = DB::table('noticias')
                ->whereDate('data_publicacao', $date)
                ->count();
        }

        return view('dashboard.index', compact(
            'totalUsuarios',
            'totalNoticias',
            'totalAgencias',
            'totalDocumentos',
            'openTickets',
            'recentNoticias',
            'eventsUpcoming',
            'labels',
            'data'
        ));
    }
}