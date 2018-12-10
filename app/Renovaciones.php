<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renovaciones extends Model
{
    $table= "renovaciones"
}
use Notifiable;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'piso', 'pared', 'techo', 'placard', 'ventana', 'cortina', 'metros cuadrados'
];
