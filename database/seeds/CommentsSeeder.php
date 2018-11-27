<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200 ; $i++) {
            DB::table('comments')->insert([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'text' => $faker->text($maxNbChars = 100) ,
                'post_id' => $faker->numberBetween($min = 1, $max = 100),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);

        }

    }
}
