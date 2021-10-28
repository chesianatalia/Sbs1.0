<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|unique:users|max:50',
            'email' => 'required|email|unique:users',
            'roles' => 'string|in:ADMIN,USER',
            'firstname' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
        ];
    }
}
