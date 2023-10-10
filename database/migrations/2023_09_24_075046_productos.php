<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150);
            $table->text('descripcion');
            $table->text('descripcionextensa');
            $table->double('precio');
            $table->double('descuento');
            $table->string('autormarca', 150);
            $table->text('img');
            $table->integer('cantidad');
            $table->string('tipo', 150);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
