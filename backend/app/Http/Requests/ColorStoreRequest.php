<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorStoreRequest extends FormRequest
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
            'title' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
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
