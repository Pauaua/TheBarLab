<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    $id = $this->route('user')->id;
    return [
        'name'     => ['required','string','max:255'],
        'email'    => ['required','email','max:255',"unique:users,email,$id"],
        'role'     => ['required','in:admin,docente,estudiante,coordinador'],
        'password' => ['nullable','confirmed','min:8'],
    ];
    }   
}
