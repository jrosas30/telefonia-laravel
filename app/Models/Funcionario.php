<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function grado(){
        return $this->belongsTo('App\Models\Grado', 'grado_id');
    }
}
