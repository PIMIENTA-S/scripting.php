<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Curso;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Curso::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        # -----------------------------------------------------------------------------#

        // Cuando es necesario llamar los seeder de otros archivos se debe usar 
        //$this->call(CursoSeeder::class);
    }
    // Para correr los seeder se usar el comando, php artisan db:seed
    // php artisan migrate --seed
}
