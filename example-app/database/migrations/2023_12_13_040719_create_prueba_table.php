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
        Schema::create('prueba', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('caso1');
            // para crear una nueva columna sin tener que borrar datos ya establecidos en la base de datos
            // php artisan make:migration add_{nombre}_to_{tabla}_table
            // php artisan make:migration add_avatar_to_prueba_table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prueba');
    }
};
