<?php

namespace Database\Seeders;

use App\Models\Curso;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(50)->create();
    }

            /* 
        $curso = new Curso();

        $curso->name = 'Laravel';
        $curso->descripcion = 'Framework de php';
        $curso->categoria = 'Desarrollo web';

        $curso -> save();

        $curso2 = new Curso();

        $curso2->name = 'Laravel';
        $curso2->descripcion = 'Framework de php';
        $curso2->categoria = 'Desarrollo web';

        $curso2 -> save();

        $curso3 = new Curso();

        $curso3->name = 'Laravel';
        $curso3->descripcion = 'Framework de php';
        $curso3->categoria = 'Desarrollo web';

        $curso3 -> save();
        */

        // php artisan migrate:fresh --seed
}
