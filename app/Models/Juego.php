<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $fillable = ["nombre"];
    public function equipos()
    {
        return $this->hasMany(Equipo::class, "juego_id");
        // Establece la relación, 1 juego puede ser usado por muchos equipos (1 a muchos) 
    }
}
