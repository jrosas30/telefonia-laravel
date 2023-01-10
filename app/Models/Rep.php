<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Altasrep;
use App\Models\Unid;

class Rep extends Model
{
    use HasFactory;

    public function altrep(){
        // $altasReparticones = Altasrep::find($this->altasrep_id);
        // return $altasReparticones;
    
        //RELACION UNO A MUCHOS (INVERSA)
        // return $this->belongsTo('App\Models\Altasrep', 'altasrep_id', 'id');
        return $this->belongsTo(Altasrep::class, 'altasrep_id', 'id');
    
    }

    //relacion uno a muchos
    public function unidades(){
        
        return $this->hasMany(Unid::class);

    }
}
