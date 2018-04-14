<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbUsuario extends Migration
{
    
    public function up()
    {
        Schema::create('tbUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('senha', 60)->unique();
            $table->string('email', 100)->unique();
            $table->string('telefone', 15);
            $table->string('endereco')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tbUsuario');
    }
}
