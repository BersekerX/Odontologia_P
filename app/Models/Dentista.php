<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    use HasFactory;
    //Para el  Dentista($request->all()); 
    protected $fillable =['nombre', 
                        'apellidos', 
                        'fechaNacimiento', 
                        'genero',
                        'especialidad', 
                        'telefono',
                        'noCasa', 
                        'calle',
                        'colonia', 
                        'municipio',
                        'estado',]; 
}
