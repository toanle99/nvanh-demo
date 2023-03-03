<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username'              => 'required|unique:users,username',
            'fullname'              => 'required|min:3',
            'password'              => 'required|min:3',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
