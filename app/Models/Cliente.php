<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // campos para rellar de forma masiva

    protected $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'telefono',
        'email',
    ];
}
