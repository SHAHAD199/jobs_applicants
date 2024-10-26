<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"       =>  ['required','string','regex:/^[a-zA-Zء-ي]/'],
            "phone"      =>  ['required','string','max:11','min:11','regex:/(07)[0-9]{9}/','unique:users'],
            "password"   =>  ['required','string','max:6']
        ];
    }
}
