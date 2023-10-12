<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_promotion extends Model
{
    use HasFactory;
    protected $fillable=(['descricao','arquivo','servico','usuario']);
}
