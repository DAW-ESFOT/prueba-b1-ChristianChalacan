<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();

        $faker = \Faker\Factory::create();
        $num_movies = 5;
        $available = true;
        for ($j = 0; $j < $num_movies; $j++) {
            Movie::create([
                'name' => $faker->sentence,
                'code' => $faker->sentence,
                'year' => $faker->numberBetween(1900,2020),
                'available'=> $available,
                'gender_id' => $faker->numberBetween(1, 3),
            ]);
        }

    }
}
