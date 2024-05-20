<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
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
        $rules = [

            'nome' => [
                'required',
                'min:3',
                'max:255',
            ],

            'sobrenome' => [
                'required',
                'min:3',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:clientes,email'
            ],

            'data_nascimento' => [
                'required',
                'date',
            ]
        ];

        if($this->method() === 'PATCH'){
            $rules['email'] = [
                'required',
                'email',
                'max:255',
                Rule::unique('clientes')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
