<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
{

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

            'usuario' => [
                'required',
                'min:3',
                'unique:usuarios'
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:usuarios'
            ],

            'senha' => [
                'required',
                'min:6',
                'max:100',
            ]
        ];

        if($this->method() === 'PATCH'){
            $rules['email'] = [
                'required',
                'email',
                'max:255',
                Rule::unique('usuarios')->ignore($this->id)
            ];

            $rules['senha'] = [
                'nullable',
                'min:6',
                'max:100',
            ];

            $rules['nome'] = [
                'nullable',
                'min:3',
                'max:255',
            ];

            $rules['usuario'] = [
                'required',
                'min:3',
                'max:255',
                Rule::unique('usuarios')->ignore($this->id)
            ];


        }

        return $rules;
    }
}
