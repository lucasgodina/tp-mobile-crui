<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'fecha_fundacion',
        'activo',
        'victorias',
        'juego_id',
    ];

    public function juego()
    {
        return $this->belongsTo(Juego::class, "juego_id");
        // Establece la relación, 1 equipo tiene 1 único juego (1 a 1)
    }
}
