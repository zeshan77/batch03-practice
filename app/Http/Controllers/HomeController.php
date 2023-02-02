<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'title' => 'This is our title',
            'manual_title' => 'Documentation',
        ]);
    }
}
