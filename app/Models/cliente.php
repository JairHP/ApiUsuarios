<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primaryKey = 'id_clientes';
    protected $fillable = [
        'id_clientes',
        'nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'correo',
        'contrasena',
        'telefono',
        'direccion',
    ];

    
}
