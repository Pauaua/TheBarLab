<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(){
    return [
        'name'     => ['required','string','max:255'],
        'email'    => ['required','email','max:255','unique:users,email'],
        'role'     => ['required','in:admin,docente,estudiante,coordinador'], // si usas roles de los apuntes
        'password' => ['required','confirmed','min:8'],
    ];
}
}
