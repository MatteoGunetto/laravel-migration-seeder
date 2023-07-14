<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "azienda" => fake() -> company(),
            "stazione_di_partenza" =>  fake() -> city(),
            "stazione_di_arrivo" =>  fake() -> city(),
            "orario_di_partenza" => fake()->dateTimeInInterval('+2 hours', '+6 hours'),
            "orario_di_arrivo" => fake()->dateTimeInInterval('+6 hours', '+12 hours'),
            "codice_treno" => fake() -> unique() -> numerify('##########'),
            "numero_carrozze" => fake() -> numberBetween(0, 15),
            "in_orario" => fake() -> boolean(),
            "cancellato" => fake() -> boolean()
        ];
    }
}
