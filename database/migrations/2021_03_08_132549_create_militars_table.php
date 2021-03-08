<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('militares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('postograd_id');
            $table->foreign('postograd_id')->references('id')->on('postograds')->onDelete('cascade');
            $table->enum('situacao',['ativa','reserva']);
            $table->string('nome_guerra');
            $table->unsignedBigInteger('forca_id');
            $table->foreign('forca_id')->references('id')->on('forcas')->onDelete('cascade');
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
        Schema::dropIfExists('militares');
    }
}
