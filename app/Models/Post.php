<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getExcerptAttribute() //RETORNAR PARA INDEX 
    {
        return substr($this->content, 0, 120); //CONTENIDO
    }

    public function getPublishedAtAttribute()
    {
        return $this->created_at->format('d/m/Y'); //CUANDO FUE CREADA EL REGISTRO
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
