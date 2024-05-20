<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CartaoResource extends JsonResource
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
            'numero_cartao'   => $this -> numero_cartao,
            'hash_cartao'     => $this -> hash_cartao,
            'validade_cartao' => $this -> validade_cartao,
            'cvv_cartao'      => $this -> cvv_cartao,
            'created'         => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
