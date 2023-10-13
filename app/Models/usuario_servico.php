<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_servico extends Model
{
    use HasFactory;
    protected $fillable=(['detalhes','data_entrada','data_final','preco_total','cliente','servico']);
}
