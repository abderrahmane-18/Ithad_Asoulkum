<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'company' => 'required|string|max:191',
            'jop_title' => 'required|string|max:191',
            'city' => 'required|string|max:191',
            'phone' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'website_name' => 'required|string|max:191',
            'type_partner' => 'required|string|max:191',
            'notes' => 'nullable|string|max:1000',
            'agree' => 'required',

            // 'fal' => 'required|max:' . getMaxSize() . '|mimes:' . acceptFileType(0),
        ];
    }
}
