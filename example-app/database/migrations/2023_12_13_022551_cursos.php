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
        // La clase schema recibe dos argumentos ('nombreTabla', functionAnonima)
        // La funcion anonima recibe como argumento un objeto del tipo Blueprint
        Schema::create('cursos', function(Blueprint $table){
            $table -> id();
            $table -> string('name'); // tipo varchar, se pueden ingrasar hasta 255 caractares, en caso de necesitar mas se usa el metodo text()
            $table -> text('descripcion');
            $table -> text('categoria');
            $table -> timestamps(); // create_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');

    }

    // retroceder con: php artisan migrate:rollback
    // crear migracion de manera direccta con:  php artisan make:migration create_cursos_table
    // actulizar cambios en basa de datos con: php artisan migrate:fresh
};
