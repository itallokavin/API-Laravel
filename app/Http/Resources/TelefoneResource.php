<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class TelefoneResource extends JsonResource
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
            'numero_telefone' => $this -> numero_telefone,
            'created'         => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
