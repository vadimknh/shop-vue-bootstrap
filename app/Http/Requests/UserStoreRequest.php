<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            "name" => "required|string",
            "email" => "required|string|unique:users,email",
            "password" => "required|string|confirmed",
            "surname" => "nullable|string",
            "patronic" => "nullable|string",
            "age" => "nullable|integer",
            "adress" => "required|string",
            "gender" => "required|integer",
        ];
    }

    /**
     * Specify error messages during validation.
     */
    public function messages()
    {
        return [
            // example: "title.required" => "This field should not be empty. Please, fill up!"
        ];
    }
}
