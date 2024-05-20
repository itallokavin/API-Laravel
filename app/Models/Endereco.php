<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'endereco_cliente';

    protected $fillable = [
        'cliente_id',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
    ];
}