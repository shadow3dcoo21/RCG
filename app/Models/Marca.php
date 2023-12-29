<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function maquinas()
    {
        return $this->hasMany(Maquina::class, 'id_marca');
    }

    public function detalles()
    {
        return $this->hasMany(Detalles::class, 'id_marca');
    }
}
