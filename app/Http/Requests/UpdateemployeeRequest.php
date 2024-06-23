<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateemployeeRequest extends FormRequest
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
            'nameupdate' => 'required|string|max:255',
            'emailupdate' => 'required|email|max:255|unique:employees,email,'.$this->route('id'),
            'phone_numberupdate' => 'required|string|max:13',
            'alamatupdate' => 'required|string|max:255',
            'domisiliupdate' => 'required|string',
        ];
    }
}
