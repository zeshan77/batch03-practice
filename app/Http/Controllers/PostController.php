<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('tags')->first();

        return $post;
//        $posts = Post::where('title', 'LIKE', '%Enim%')
//            ->take(5)
//            ->orderBy('id', 'asc')
//            ->first();
//
////        $posts = Post::first();
//
//        return $posts;



//        $user = User::with('posts')->first();
//
//        return $user;


        $post = Post::with('user')
            ->orderBy('id', 'desc')
            ->first();

        return $post;

    }

    public function store(Request $request)
    {
        $post = Post::first();

        $tags = Tag::take(4)->pluck('id')->toArray();

        $post->tags()->sync($tags);

        return $post;
    }
}
