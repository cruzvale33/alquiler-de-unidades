<?php

namespace App\Http\Resources;

use App\Models\Asesor;
use Illuminate\Http\Resources\Json\JsonResource;

class UnidadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'tipo_ua' => $this->tipo_ua,
            'marca' => $this->marca,
            'procesador' => $this->procesador,
            'generacion' => $this->generacion,
            'empresa' => $this->cliente->empresa,
            'asesor' => Asesor::find($this->cliente->asesor_id)->nombre,
            
        ];
    }
}
