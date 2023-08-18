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
        Schema::create('puestos', function(Blueprint $table){
            $table->id();
            $table->string('name')->unique();
            $table->bigInteger('status'); // 1 activo, 0 desactivado (eliminado)
            $table->timestamps(); //crea dos tablas create_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puestos');
    }
};
