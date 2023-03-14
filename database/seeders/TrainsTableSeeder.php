<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

// helpers
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i<10; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->codice_treno = $faker->randomNumber(6, true);
            $train->numero_carrozze = $faker->randomNumber(2,true);
            $train->puntuale = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data = $faker->date();
            $train->save();
        }

    }
}
