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
            "stazione di partenza" =>  fake() -> city(),
            "stazione di arrivo" =>  fake() -> city(),
            "orario di partenza" => fake() -> numberBetween(0, 24),
            "orario di arrivo" => fake() -> numberBetween(0, 24),
            "codice treno" => fake() -> unique() -> numerify('##########'),
            "numero carrozze" => fake() -> numberBetween(0, 15),
            "in_orario" => fake() -> boolean(),
            "cancellato" => fake() -> boolean()
        ];
    }
}
