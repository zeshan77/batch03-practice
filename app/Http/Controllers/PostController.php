<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('title', 'LIKE', '%Enim%')
            ->take(5)
            ->orderBy('id', 'asc')
            ->first();

//        $posts = Post::first();

        return $posts;
    }
}
