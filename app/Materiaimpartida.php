<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiaimpartida extends Model
{
    protected $table = 'materiasimpartidas';

    //TODO definir correctamente el nombre del método users o docentes
    
    public function user() {
        return $this->belongsTo('\App\User','id','docente');
    }

    public function grupo() {
        return $this->belongsTo('\App\Grupo','id','grupo');
    }

    public function materia() {
        return $this->belongsTo('\App\Materia','id','materia');
    }

}
