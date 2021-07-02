<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = ['nombreProducto',
                            'fechaCaducidad',
                            'ubicacion',
                            'tipoUnidad',
                            'stockActual',
                            'precioNeto',
                            'fecha',
                            'user_id',


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
