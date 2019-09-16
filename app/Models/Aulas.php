<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Aulas extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'link_video',
    ];

    public function categorias(){
        
        return $this->hasMany(Categorias::class);
    }
   
    public function curso(){
        
        return $this->belongsTo(Cursos::class);
    }
    
}
