<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','edad','nacionalidad','equipo','dorsal'];/*Son los datos que quiero que haya en la tabla de la base de datos*/

    public function scopeSortByStatus($query,$direction){

    }
    public function scopeSortByActivity($query,$direction){

    }
}
