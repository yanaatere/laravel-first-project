<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home"
        ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Yana",
        "email" => "yanaandika@gmail.com",
        "image" => "img/pasphoto.JPG",
        "tittle" => "About"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yana Andika",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Etiam a nulla sollicitudin, rhoncus felis eu, posuere lorem. Maecenas sodales tellus mi, in sollicitudin augue tempus non.
         In consequat euismod enim, non molestie risus maximus sed. Sed gravida a orci vel condimentum. Pellentesque finibus, sapien scelerisque molestie molestie, felis augue viverra orci, in condimentum mi erat ut nisl.
         Maecenas tempus augue convallis congue tincidunt. Ut feugiat mauris a neque aliquet varius. Morbi dui sapien, scelerisque a pharetra in, fringilla a erat.
         Praesent a odio malesuada, porttitor purus a, interdum ante. Suspendisse sed quam ac neque facilisis pulvinar iaculis at sapien. Etiam vitae urna est. Proin eros tortor, varius et erat eu, rhoncus ultrices eros.
         Aliquam sodales tristique congue. Cras dignissim hendrerit sodales."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yohanna",
            "body" => "Nunc consequat ipsum vel quam rutrum tempor. Nulla tristique dui leo, et porta erat eleifend vel. Phasellus ut ullamcorper est.
        Nulla non arcu quis risus congue dictum. Fusce semper libero id enim hendrerit sollicitudin. Morbi vel velit fringilla quam sollicitudin tincidunt.
        Phasellus et diam blandit, pretium diam sed, aliquam eros. Etiam ultricies eu tortor sit amet pretium. Mauris tempus ipsum eu erat pellentesque, sit amet cursus neque bibendum.
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer pharetra nisl turpis. Nullam commodo a felis a bibendum.
        Praesent condimentum eu dui eu vestibulum. Morbi lobortis at dui eu pretium. Maecenas id fringilla risus. Cras et maximus purus."
        ]
    ];

    return view('posts',[
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug){

    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yana Andika",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Etiam a nulla sollicitudin, rhoncus felis eu, posuere lorem. Maecenas sodales tellus mi, in sollicitudin augue tempus non.
         In consequat euismod enim, non molestie risus maximus sed. Sed gravida a orci vel condimentum. Pellentesque finibus, sapien scelerisque molestie molestie, felis augue viverra orci, in condimentum mi erat ut nisl.
         Maecenas tempus augue convallis congue tincidunt. Ut feugiat mauris a neque aliquet varius. Morbi dui sapien, scelerisque a pharetra in, fringilla a erat.
         Praesent a odio malesuada, porttitor purus a, interdum ante. Suspendisse sed quam ac neque facilisis pulvinar iaculis at sapien. Etiam vitae urna est. Proin eros tortor, varius et erat eu, rhoncus ultrices eros.
         Aliquam sodales tristique congue. Cras dignissim hendrerit sodales."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yohanna",
            "body" => "Nunc consequat ipsum vel quam rutrum tempor. Nulla tristique dui leo, et porta erat eleifend vel. Phasellus ut ullamcorper est.
        Nulla non arcu quis risus congue dictum. Fusce semper libero id enim hendrerit sollicitudin. Morbi vel velit fringilla quam sollicitudin tincidunt.
        Phasellus et diam blandit, pretium diam sed, aliquam eros. Etiam ultricies eu tortor sit amet pretium. Mauris tempus ipsum eu erat pellentesque, sit amet cursus neque bibendum.
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer pharetra nisl turpis. Nullam commodo a felis a bibendum.
        Praesent condimentum eu dui eu vestibulum. Morbi lobortis at dui eu pretium. Maecenas id fringilla risus. Cras et maximus purus."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post',[
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});


