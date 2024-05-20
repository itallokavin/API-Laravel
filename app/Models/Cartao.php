<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    protected $table = 'cartao_cliente';

    protected $fillable = [
        'cliente_id',
        'numero_cartao',
        'hash_cartao',
        'validade_cartao',
        'cvv_cartao',
    ];
}