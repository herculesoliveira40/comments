<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // true if the user is authorized to make this request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|string|max:255|min:4',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio',
            'email.required' => 'O campo e-mail é obrigatorio',
            'email.unique' => 'e-mail já utilizado, tente outro',
            'password.required' => 'O campo Senha é obrigatorio',

        ];
    }
}
