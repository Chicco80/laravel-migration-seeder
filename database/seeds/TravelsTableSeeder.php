<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <20; $i++){
        $newTravel = new Travel();


        $newTravel->luogo = $faker->state();
        $newTravel->data_partenza = $faker->dateTimeThisYear();
        $newTravel->posti_disponibili = $faker->numberBetween(0, 100);
        $newTravel->durata = $faker->numberBetween(0, 15);
        $newTravel->sistemazione = $faker->text();
        $newTravel->image = $faker->imageUrl(150, 150, 'animal', true);


        $newTravel->save();
        }
    }
}
