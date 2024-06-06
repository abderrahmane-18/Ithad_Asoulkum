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
            'type_mony' => 'required|not_in:0',
            'name' => 'nullable',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'checkbox' => 'required|not_in:0',
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
            'type_mony.required' => __('validation.custom.form.required'),
            'type_mony.not_in' => __('validation.custom.form.required'),
            'phone.required' => __('validation.custom.form.required'),
            'phone.regex' => __('validation.custom.form.regex'),
            'email.required' => __('validation.custom.form.required'),
            'email.email' => __('validation.custom.form.email'),
            'service.not_in' => __('validation.custom.form.required'),
            'type_service.not_in' => __('validation.custom.form.required'),
            'price_start.numeric' => __('validation.custom.form.numeric'),
            'price_end.numeric' => __('validation.custom.form.numeric'),
            'checkbox.not_in' => __('validation.custom.form.accepted'),
        ];
    }
}
