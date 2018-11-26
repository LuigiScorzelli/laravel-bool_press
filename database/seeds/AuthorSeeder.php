<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
         DB::table('authors')->insert([
           'first_name' => $faker->firstName,
           'last_name' => $faker->lastName,
           'description' => $faker->text($maxNbChars = 50),
           'twitter_handle' => $faker->bothify('@ ??##'),
           'created_at' => $faker->dateTime($max = 'now', $timezone = null),
           'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
         ]);
       }
    }
}
