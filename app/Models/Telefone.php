<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $table = 'telefone_cliente';
    
    protected $fillable = [
        'cliente_id',
        'numero_telefone',
    ];
}
