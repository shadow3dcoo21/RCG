<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function maquinas()
    {
        return $this->hasMany(Maquina::class, 'id_categoria');
    }

    public function detalles()
    {
        return $this->hasMany(Detalles::class, 'id_categoria');
    }
}
