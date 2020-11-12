<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitante extends Model
{
    public $timestamps = false;
    protected $fillable =[
    'documentoidentidad', 
    'primer_nombre',  
    'segundo_nombre', 
    'primer_apellido',
    'segundo_apellido',
    'telefono',
    'correo',
    'fecha'
                        ];  

    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion');
    }

}
