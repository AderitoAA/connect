<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        // Slides: destaque + publicado + data_publicacao <= agora
        $slides = DB::table('noticias')
            ->where('destaque', 1)
            ->where('publicado', 1)
            ->whereNotNull('data_publicacao')
            ->where('data_publicacao', '<=', $now)
            ->orderBy('data_publicacao', 'desc')
            ->limit(3)
            ->get();

        // Últimas notícias publicadas
        $latest = DB::table('noticias')
            ->where('publicado', 1)
            ->whereNotNull('data_publicacao')
            ->where('data_publicacao', '<=', $now)
            ->orderBy('data_publicacao', 'desc')
            ->limit(4)
            ->get();

        // Populares por views
        $popular = DB::table('noticias')
            ->where('publicado', 1)
            ->whereNotNull('data_publicacao')
            ->where('data_publicacao', '<=', $now)
            ->orderBy('views', 'desc')
            ->limit(3)
            ->get();

        // Anos de casa (exemplo)
        $anosCasa = DB::table('anos_casa')
            ->join('usuarios', 'anos_casa.usuario_id', '=', 'usuarios.id')
            ->select('usuarios.nome', 'usuarios.foto_url', 'anos_casa.anos')
            ->orderBy('anos_casa.anos', 'desc')
            ->limit(3)
            ->get();

        return view('home', compact('slides', 'latest', 'popular', 'anosCasa'));
    }
}