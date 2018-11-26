<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) {

            $title = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $slug = str_slug( $title, '-');

         DB::table('posts')->insert([
             // 'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
             'title' => $title,
             'content' => $faker->paragraph($nbSentences = 30, $variableNbSentences = true),
             'slug' => $slug,
             'author_id' =>$faker->numberBetween($min = 41, $max = 60),
             'category_id' => $faker->numberBetween($min = 1, $max = 10),
             'created_at' => $faker->dateTime($max = 'now', $timezone = null),
             'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
         ]);
       }
    }
}
