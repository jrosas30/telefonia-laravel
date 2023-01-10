<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rep;

class Altasrep extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function reps(){
        //primer metodo crear consulta manual:
        // $altasReparticiones = Altasrep::where('id', $this->id);
        // return $altasReparticiones;

        //Segundo metodo
        return $this->hasMany(Rep::class);

        //tercer metodo en caso de no seguir las convenciones
        //return $this->hasOne('modelo','llaveForanea','llavePrimaria')
    }
}

