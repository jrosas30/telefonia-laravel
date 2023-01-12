<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS (INVERSA)
    public function marca(){
        
        return $this->belongsTo(Marca::class);
    
    }
}
