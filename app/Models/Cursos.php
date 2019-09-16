<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'tipo_publico',
    ];

    public function aulas(){

        return $this->hasMany(Aulas::class);
    }
}
