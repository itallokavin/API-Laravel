<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class EnderecoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this -> id,
            'cliente_id'      => $this -> cliente_id,
            'logradouro'      => $this -> logradouro,
            'numero'          => $this -> numero,
            'bairro'          => $this -> bairro,
            'cidade'          => $this -> cidade,
            'estado'          => $this -> estado,
            'cep'             => $this -> cep,
            'created'         => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
