<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function marca(){
        //belongsTo es un relacion Muchos a 1
        return $this->belongsTo(Marca::class);
    }
    public function categoria(){
        //belongsTo es un relacion Muchos a 1
        return $this->belongsTo(Categoria::class);
    }

}
