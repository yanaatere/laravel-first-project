<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lets Truncate First
        Article::truncate();
        $faker = \Faker\Factory::create();

        //And Now, lets create a few article in our database
        for ($i = 0; $i = 50; $i++){
            Article::create([
               'title' => $faker->sentence,
                'body'=> $faker->paragraph
            ]);
        }
    }
}