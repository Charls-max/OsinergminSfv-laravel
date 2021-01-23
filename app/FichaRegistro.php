<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaRegistro extends Model
{
    public function empresa(){ //$fichaRegistro->empresa->nombre
        return $this->belongsTo(Empresa::class); //Pertenece a una empresa.
    }
}
