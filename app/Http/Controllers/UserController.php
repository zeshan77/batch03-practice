<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('profile')->first();

        return $user;
    }

    public function store(Request $request)
    {
        $user = User::first();

        if(! $user->profile) {
            $user->profile()->create([
                'date_of_birth' => $request->get('date_of_birth'),
                'blood_group' => $request->get('blood_group'),
                'contact_no' => $request->get('contact_no'),
            ]);
        }

        return $user;
    }
}
