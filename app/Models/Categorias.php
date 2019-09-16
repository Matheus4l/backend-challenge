<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'nome', 'descricao',
    ];

    public function aulas(){

        return $this->belongsTo(Aulas::class);
    }
}
