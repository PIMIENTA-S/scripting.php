<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Para que se genere los registros de prueba se debe poner los campos a rellenar de la basa de datos
        return [
            // 'columna => $this -> faker -> {relleno}'
            'name'=> $this->faker->sentence(), // Sentence puede tener mas de 1 linea 
            'descripcion'=> $this->faker->paragraph(), // Se generara un parrafo
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web', 'Programacion']) // De manera aleatoria se podrá tener una de las dos categorias explicitas
        ];
    }
}
