<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (Schema::hasTable('noticias')) {
            Schema::table('noticias', function (Blueprint $table) {
                if (!Schema::hasColumn('noticias', 'imagem_capa_url')) {
                    $table->string('imagem_capa_url')->nullable()->after('conteudo');
                }
                if (!Schema::hasColumn('noticias', 'destaque')) {
                    $table->boolean('destaque')->default(false)->after('imagem_capa_url');
                }
                if (!Schema::hasColumn('noticias', 'publicado')) {
                    $table->boolean('publicado')->default(false)->after('destaque');
                }
                if (!Schema::hasColumn('noticias', 'data_publicacao')) {
                    $table->dateTime('data_publicacao')->nullable()->after('publicado');
                }
                if (!Schema::hasColumn('noticias', 'views')) {
                    $table->integer('views')->default(0)->after('data_publicacao');
                }
            });
        } else {
            // caso a tabela não exista (defensivo), cria a tabela mínima
            Schema::create('noticias', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titulo', 250);
                $table->string('slug', 300)->unique();
                $table->string('resumo', 500)->nullable();
                $table->text('conteudo')->nullable();
                $table->string('imagem_capa_url')->nullable();
                $table->boolean('destaque')->default(false);
                $table->boolean('publicado')->default(false);
                $table->dateTime('data_publicacao')->nullable();
                $table->integer('views')->default(0);
                $table->integer('criado_por')->nullable()->index();
                $table->dateTime('criado_em')->nullable();
                $table->dateTime('atualizado_em')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        if (Schema::hasTable('noticias')) {
            Schema::table('noticias', function (Blueprint $table) {
                if (Schema::hasColumn('noticias', 'imagem_capa_url')) {
                    $table->dropColumn('imagem_capa_url');
                }
                if (Schema::hasColumn('noticias', 'destaque')) {
                    $table->dropColumn('destaque');
                }
                if (Schema::hasColumn('noticias', 'publicado')) {
                    $table->dropColumn('publicado');
                }
                if (Schema::hasColumn('noticias', 'data_publicacao')) {
                    $table->dropColumn('data_publicacao');
                }
                if (Schema::hasColumn('noticias', 'views')) {
                    $table->dropColumn('views');
                }
            });
        }
    }
}