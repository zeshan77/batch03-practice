<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'abc' => ['required', 'min:3', 'max:25',],
            'description' => ['required', 'min:5', 'max:1000'],
        ];
    }
}
