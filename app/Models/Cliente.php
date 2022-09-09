<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa',
        'sector',
        'tamano',
        'asesor_id',
    ];

    protected $table = 'clientes';

    public function asesor(){
        return $this->belongsTo(Asesor::class);
    }

    public function unidades(){
        return $this->hasMany(Unidad::class);
    }
}
