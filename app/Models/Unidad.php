<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'tipo_ua',
        'marca',
        'procesador',
        'generacion',
        'cliente_id',
    ];

    protected $table = 'unidades';

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
