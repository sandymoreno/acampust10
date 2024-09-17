<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'first_name'      => 'required|string|max:191',
            'middle_initial'  => 'nullable|string|max:191',
            'last_name'       => 'required|string|max:191',
            'loan'            => 'required|numeric|min:0|max:9999999999.99',
            'value'           => 'required|numeric|min:0|max:9999999999.99',
        ];
    }
}
