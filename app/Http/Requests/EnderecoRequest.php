<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EnderecoRequest extends FormRequest
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

            'logradouro' => [
                'required',
                'min:3',
                'max:100'
            ],

            'numero' => [
                'required',
                'max:7'
            ],

            'bairro' => [
                'required',
                'max:50'
            ],

            'cidade' => [
                'required',
                'max:50'
            ],

            'estado' => [
                'required',
                'size:2'
            ],

            'cep' => [
                'required',
                'max:8',
                Rule::unique('endereco_cliente')->where('cliente_id', $this->input('cliente_id'))
            ],
        ];

        if($this->method() === 'PATCH'){
            $rules['cep'] = [
                'required',
                'max:8',
                Rule::unique('endereco_cliente')
                    ->where('cliente_id', $this->input('cliente_id'))
                    ->ignore($this->id)
            ];
        }

        return $rules;
    }
}
