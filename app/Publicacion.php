<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";
    protected $fillable = ['titulo','cuerpo',];  
    public $timestamps = false;
//Relacion con la tabla vehiculo
    public function habitantes()
    {return $this->belongsTo('App\Habitante');
    }
}
