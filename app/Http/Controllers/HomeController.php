<?php

namespace App\Http\Controllers;

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
