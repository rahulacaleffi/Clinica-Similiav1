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
        Schema::create('tbColaboradores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('crx');
            $table->boolean('ambulatorio');
            $table->boolean('wwr');
            $table->boolean('casosmensais');
            $table->boolean('metododasensacao');
            $table->boolean('macreprw');
            $table->string('contribuicao');
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
        Schema::dropIfExists('tbColaboradores');
    }
}
