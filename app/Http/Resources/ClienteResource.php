<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this -> id,
            'nome'              => $this -> nome,
            'sobrenome'         => $this -> sobrenome,
            'email'             => $this -> email,
            'data_nascimento'   => $this -> data_nascimento,
            'created'           => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
