<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use PhpParser\Node\Stmt\For_;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200 ; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z]{10}[0-4]{5}');
            $newTrain->number_of_carriages = $faker->numberBetween (1, 30);
            $newTrain->in_time = $faker->boolean();
            $newTrain->is_delete = $faker->boolean();
            $newTrain->save();

            

        }
    }
}
