<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiaController extends Controller
{
    public function show($slug)
    {
        $now = Carbon::now();
        $noticia = DB::table('noticias')
            ->where('slug', $slug)
            ->where('publicado', 1)
            ->whereNotNull('data_publicacao')
            ->where('data_publicacao', '<=', $now)
            ->first();

        if (!$noticia) {
            abort(404);
        }

        // Incrementa views de forma atômica
        DB::table('noticias')->where('id', $noticia->id)->increment('views');

        // Recarrega o registo atualizado (opcional)
        $noticia = DB::table('noticias')->where('id', $noticia->id)->first();

        return view('noticias.show', compact('noticia'));
    }
}