<?php

namespace App\Http\Controllers;

use App\Http\Resources\UnidadResource;
use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    public function getByClient($clientId){
        return response()->json(UnidadResource::collection(Unidad::with(['cliente'])->where('cliente_id',$clientId)->get()));
    }
}
