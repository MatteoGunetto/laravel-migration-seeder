<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\trains>
 */
class trainsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "azienda" => fake() -> paragraphs(1, true),
            "stazione_di_partenza" =>  fake() -> city(),
            "stazione_di_arrivo" =>  fake() -> city(),
            "orario_di_partenza" => fake() -> numberBetween(0, 24),
            "orario_di_arrivo" => fake() -> numberBetween(0, 24),
            "codice_treno" => fake() -> unique() -> numerify('##########'),
            "numero_carrozze" => fake() -> numberBetween(0, 15),
            "in_orario" => fake() -> boolean(),
            "cancellato" => fake() -> boolean()
        ];
    }
}
