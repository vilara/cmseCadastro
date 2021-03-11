<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreign('id')->references('id')->on('arranchacmse.users');
            $table->string('idt')->nullable();
            $table->enum('sexo', ['masculino','feminino'])->nullable();
            $table->unsignedBigInteger('om_id')->nullable();
            $table->foreign('om_id')->references('id')->on('oms')->onDelete('cascade');
            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
            $table->date('dtNasc')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->string('nome_completo')->nullable();
            $table->nullableMorphs('detailable');
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
        Schema::dropIfExists('details');
    }
}
