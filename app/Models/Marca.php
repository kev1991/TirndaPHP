<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;


    //relacion con productos 1-m
    public function productos(){
        //retornar los productos de la marca

        return $this->hasmany(Producto::class);
    }
}
