<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active"=>"posts",
            /*Eager Load*/
            "posts" => Post::latest()->get()
            /* lazy Load
             * "posts" => Post::latest()->get()*/
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active"=>"posts",
            "post" => $post
        ]);
    }
}
