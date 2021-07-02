<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    
    protected $fillable = [
                            'fecha',
                            'noTratamientos',
                            'metodoPago',
                            'abono',
                            'totalFactura',
                            'paciente_id',];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
