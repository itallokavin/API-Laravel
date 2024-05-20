<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this -> id,
            'nome'      => $this -> nome,
            'usuario'   => $this -> usuario,
            'email'     => $this -> email,
            'created'   => Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
