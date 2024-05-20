<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TelefoneRequest extends FormRequest
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
            'numero_telefone' => [
                'required',
                'min:10',
                'max:11',
                Rule::unique('telefone_cliente')->ignore($this->route('id'))
            ],
        ];
    
        if($this->method() === 'PATCH'){            
            $rules['numero_telefone'] = [
                'required',
                'min:10',
                'max:11',
                Rule::unique('telefone_cliente')->ignore($this->route('id'))
            ];
        }
    
        return $rules;
    }
}
