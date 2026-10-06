<?php

namespace App\Controllers;

use App\Models\Post;

class PublicController
{
    public function index()
    {
        $title = 'World';

        $posts = Post::where('category', 'world');

        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';

        $posts = Post::where('category', 'us');

        view('us', compact('title', 'posts'));
    }
}