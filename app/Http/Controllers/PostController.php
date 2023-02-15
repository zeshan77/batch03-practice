<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')
            ->orderBy('created_at', 'desc')
            ->get();

        return $posts;
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

    public function store(PostCreateRequest $request)
    {
        $data = $request->validated();

        $post = Post::create([
            'user_id' => User::first()->id,
            'title' => $data['abc'],
            'description' => $data['description'],
        ]);

        return redirect('/posts');
    }

    public function create()
    {
        return view('posts.create');
    }
}
