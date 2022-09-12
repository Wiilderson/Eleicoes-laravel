<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_eleicao');
            $table->date('data_eleicao');
            $table->string('nome_candidatos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electios');
    }
}
