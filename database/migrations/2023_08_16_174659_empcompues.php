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
        Schema::create('empcompues', function(Blueprint $table){
            $table->id();
            $table->bigInteger('idempleado');
            $table->bigInteger('idcompania');
            $table->bigInteger('idpuesto');
            $table->timestamps(); //crea dos tablas create_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empcompues');
    }
};
