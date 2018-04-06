<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'id_estudiante';

    public $fillable = [
        'apellido_paterno', 'apellido_materno', 'nombre',
        'pais', 'departamento', 'ci', 'fecha_nacimiento',
        'sexo', 'direccion' ,'telefono'
    ];
    public $timestamps = false;
}
