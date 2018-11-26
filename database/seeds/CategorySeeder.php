<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            DB::table('categorys')->insert([
                'name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'description' => $faker->text($maxNbChars = 100),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }

    }
}
