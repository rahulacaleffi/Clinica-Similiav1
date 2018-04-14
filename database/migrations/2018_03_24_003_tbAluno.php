<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbAluno extends Migration
{
    
    public function up()
    {
        Schema::create('tbAluno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crx_tipo', 3);
            $table->string('crx_numero', 10)->unique();
            $table->integer("usuario_id")->unsigned()->nullable();

            $table->foreign('usuario_id')->references('id')->on('tbUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbAluno');
    }
}
