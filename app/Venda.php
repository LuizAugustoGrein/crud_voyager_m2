<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Venda extends Model
{
    protected $fillable = [
        'data_venda',
        'quantidade',
        'valor_unitario',
        'produtos_id',
        'vendedores_id',
    ];
}