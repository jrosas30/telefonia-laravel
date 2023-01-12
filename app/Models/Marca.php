<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS (INVERSA)
    public function altrep(){

        return $this->belongsTo(Altasrep::class, 'altasrep_id', 'id');
    
    }

    //relacion uno a muchos
    public function modelos(){
        
        return $this->hasMany(Modelo::class);

    }
}
