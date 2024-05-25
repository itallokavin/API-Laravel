<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CartaoRequest extends FormRequest
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

            'cliente_id' => [
                'required',
                'exists:clientes,id',
            ],

            'numero_cartao' => [
                'required',
                'min:13',
                'max:16',
                'unique:cartao_cliente'
            ],

            'validade_cartao' => [
                'required',
                'max:7'
            ],

            'cvv_cartao' => [
                'required',
                'max:3'
            ],
        ];

        if($this->method() === 'PATCH'){
            $rules['numero_cartao'] = [
                Rule::unique('cartao_cliente')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
