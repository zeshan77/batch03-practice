<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
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
            ->get();

        return $post;

    }

    public function store(Request $request)
    {
        $user = User::first();

        $post = $user->posts()->create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);

        return $post;
    }
}
