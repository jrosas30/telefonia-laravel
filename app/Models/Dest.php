<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unid;

class Dest extends Model
{
    use HasFactory;

    public function unidad(){
        
        return $this->belongsTo(Unid::class, 'unid_id');
    
    }
}
