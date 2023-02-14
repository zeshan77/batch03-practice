<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Zeshan', 'age' => 35],
            ['name' => 'Abid', 'age' => 33],
            ['name' => 'Ali', 'age' => 30],
        ];

        return view('welcome', [
            'title' => 'This is our title',
            'manual_title' => 'Documentation',
            'age' => 22,
            'users' => $users,
        ]);
    }

    public function home()
    {
        return view('index');
    }
}
