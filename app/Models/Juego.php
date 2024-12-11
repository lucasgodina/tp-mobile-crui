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
        /*1 juego muchos equipos*/ 
    }
}
