<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ds_nome',200);
            $table->string('ds_nome_social',200);
            $table->char('tp_sexo',1)->nullable(); // M - Masculino | F - Feminino
            $table->date('dt_nascimento',1);
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pessoa');
    }
}
