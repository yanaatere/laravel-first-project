<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory(10)->create();

        User::create([
            'name' => 'Yana Andika',
            'email' => 'yanaandika@gmail.com',
            'password' =>bcrypt('12345')
        ]);

        User::create([
            'name' => 'Dodi',
            'email' => 'dodi@gmail.com',
            'password' =>bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title'=> 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title'=> 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title'=> 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
