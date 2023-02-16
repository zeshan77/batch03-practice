<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => User::first()->id,
        ]);
    }

    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'title' => ['required', 'min:3', 'max:25',],
            'description' => ['required', 'min:5', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field cannot be left blank',
            'title.min' => 'The title field cannot be less than 3 characters',
            'user_id' => 'The user must exists in the users table',
        ];
    }

    public function attributes(): array
    {
        return [
            'description' => 'Post Description',
        ];
    }

}
