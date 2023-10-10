<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deseos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarioid');
            $table->unsignedBigInteger('productoid');
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('usuarioid')->references('id')->on('usuarios');
            $table->foreign('productoid')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deseos');
    }
};
