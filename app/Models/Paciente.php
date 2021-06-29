<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable =['nombre', 
                        'apellidos', 
                        'fechaNacimiento', 
                        'genero', 
                        'telefono',
                        'email',]; 
    
    public function tratamientos()
    {
        return $this->belongsToMany(Tratamiento::class);
    }
}
