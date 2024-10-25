<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BATERIA extends Model
{
    use HasFactory;

    protected $table = 'b_a_t_e_r_i_a_s'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = [
        'Tipo',
        'Capacidad',
        'Voltaje',
        'Uso',
        // Si usas timestamps, no es necesario incluir created_at y updated_at
    ];

    public $timestamps = true; // Esto habilita las columnas created_at y updated_at
}