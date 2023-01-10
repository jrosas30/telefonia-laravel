<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rep;
use App\Models\Dest;

class Unid extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS (INVERSA)
    public function reparticion(){
        
        // return $this->belongsTo('App\Models\Altasrep', 'altasrep_id', 'id');
        return $this->belongsTo(Rep::class, 'rep_id');
    
    }

    //relacion uno a muchos
    public function destacamentos(){
        
        return $this->hasMany(Dest::class);

    }
}
