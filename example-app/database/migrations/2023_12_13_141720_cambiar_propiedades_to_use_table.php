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
        Schema::table('prueba', function (Blueprint $table) {
            // para realizar un cambio 
            $table -> string('caso1', 150) -> change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prueba', function (Blueprint $table) {
            //
            $table -> string('caso1', 255) -> nullable(false) -> change();
        });
    }
};
