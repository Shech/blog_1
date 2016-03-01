<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();

        Article::create([
            'title' => $faker->name,
            'body' => $faker->paragraph,
            'user_id' => '1',
        ]);

        Article::create([
            'title' => $faker->name,
            'body' => $faker->paragraph,
            'user_id' => '1',
        ]);
    }
}
