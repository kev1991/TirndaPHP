<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    //Relacionar una marca con los productos

    function productos()
    {
      
        //retorar los productos de la marca
        return $this -> hasMany(Producto::class);
    }
    
}
