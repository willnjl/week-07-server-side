<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            "first_name" => ["required", "max:255"],
            "last_name" => ["required", "string", "max:255" ],
            "telephone" => ["required", "string", "max:14"],
            "email" => ["required", "email","max:255","unique:App\Owner,email" ],
            "address_1" => ["required", "string","max:255" ],
            "address_2" => ["nullable","string", "max:255"],
            "town" => ["required", "string","max:255" ],
            "postcode" => ["required", "string", "regex:/^\D+\w+\s\d+\D{2}$/i"],
        ];
    }
}
