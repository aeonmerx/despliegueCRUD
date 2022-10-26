<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";
    protected $keyPrimary = "id";
    protected $fillable = [
    'nombreEquipo','pais','ciudad','numeroJugadores',
    ];
}
