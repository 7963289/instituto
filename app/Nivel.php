<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';


    public function grupos()
    {
        return $this->hasMany('App\Grupos', 'id');
    }

    public function niveles() {
        return $this->hasMany('\App\Nivel','nivelsuperior');
    }

    public function nivelObject() {
        return $this->belongsTo('\App\Nivel','id','nivelsuperior');
    }


    


}
