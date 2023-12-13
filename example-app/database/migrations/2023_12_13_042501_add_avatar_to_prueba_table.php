<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // recibe como parametro el nombre de la tabla a modificar y una funcion anonima
        Schema::table('prueba', function (Blueprint $table) {
            // todos lo cambios que se añadan se agragaran al final
            // se debe especificar la capacidad de ser nulo para evitar errores; ->nullable
            $table -> string('avatar')->nullable()->after('id');
            // por defecto la columna se agrega al final, para espeficar un lugar se hace de esta manera
            // ->after('columna')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prueba', function (Blueprint $table) {
            //
            $table->dropColumn('avatar');
        });
    }

    //php artisan migrate
};
