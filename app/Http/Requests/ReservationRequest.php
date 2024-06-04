<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'service' => 'required|not_in:0',
            'type_service' => 'required|not_in:0',
            'city' => 'required',
            'price_start' => 'required|numeric',
            'price_end' => 'required|numeric',
            'name' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'service.required' => __('validation.custom.form.required'),
            'type_service.required' => __('validation.custom.form.required'),
            'city.required' => __('validation.custom.form.required'),
            'price_start.required' => __('validation.custom.form.required'),
            'price_end.required' => __('validation.custom.form.required'),
            'phone.required' => __('validation.custom.form.required'),
            'email.required' => __('validation.custom.form.required'),
            'email.email' => __('validation.custom.form.email'),
            'service.not_in' => __('validation.custom.form.required'),
            'type_service.not_in' => __('validation.custom.form.required'),
            'price_start.numeric' => __('validation.custom.form.numeric'),
            'price_end.numeric' => __('validation.custom.form.numeric'),
        ];
    }
}
