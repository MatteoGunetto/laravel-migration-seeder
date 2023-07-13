<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train ->azienda = "test add";
        $train -> stazione_di_partenza = "my city";
        $train ->stazione_di_arrivo = "city";
        $train ->orario_di_partenza = "15";
        $train ->orario_di_arrivo = "20";
        $train ->codice_treno = "312465";
        $train ->numero_carrozze = "14";
        $train ->in_orario = "true";
        $train ->cancellato = "false";

        $train -> save();

        Train :: factory() -> count(100) -> create();

    }
}
