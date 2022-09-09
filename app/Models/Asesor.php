<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'celular',
    ];

    protected $table = 'asesores';

    public function clientes(){
        return $this->hasMany(Cliente::class); 
    }
}
