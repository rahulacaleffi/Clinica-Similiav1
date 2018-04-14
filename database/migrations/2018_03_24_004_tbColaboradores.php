<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbColaboradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbColaborador', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('ambulatorio');
            $table->boolean('wwr');
            $table->boolean('casosmensais');
            $table->boolean('metododasensacao');
            $table->boolean('macreprw');
            $table->decimal('contribuicao', 10, 2);
            $table->integer("aluno_id")->unsigned()->nullable();

            $table->foreign('aluno_id')->references('id')->on('tbAluno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbColaborador');
    }
}
