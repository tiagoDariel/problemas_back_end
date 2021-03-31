<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosProblemaDoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_problema_dois', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profissao_id')->constrained('profissao_problema_dois');
            $table->foreignId('livro_id')->constrained('problema_dois');
            $table->string('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_problema_dois');
    }
}
