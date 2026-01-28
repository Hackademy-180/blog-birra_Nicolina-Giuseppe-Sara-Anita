<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
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
            "name" => "required",
            "brewery" => "required",
            "style" => "required",
            "info" => "required|min:30"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => " un campo obbligatorio",
            "brewery.required" => " un campo obbligatorio",
            "style.required" => " un campo obbligatorio",
            "info.required" => " un campo obbligatorio",
            "info.min" => "questo campo deve contenere almeno 30 caratteri"


        ];
    }
}
