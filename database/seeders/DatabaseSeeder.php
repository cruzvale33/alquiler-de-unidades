<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Asesor;
use App\Models\Cliente;
use App\Models\Unidad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Asesor::factory()->create([
            'nombre' => 'MAURICIO',
            'correo' => 'mauricio@leasein.pe',
            'celular' => '999888777',
        ]);
        Asesor::factory()->create([
            'nombre' => 'DIEGO',
            'correo' => 'diego@leasein.pe',
            'celular' => '999777666',
        ]);
        Asesor::factory()->create([
            'nombre' => 'ALEJANDRO',
            'correo' => 'alejandro@leasein.pe',
            'celular' => '999666555',
        ]);
        Asesor::factory()->create([
            'nombre' => 'ERIKA',
            'correo' => 'erika@leasein.pe',
            'celular' => '999555444',
        ]);
        Asesor::factory()->create([
            'nombre' => 'NICOLE',
            'correo' => 'nicole@leasein.pe',
            'celular' => '999444333',
        ]);


        Cliente::factory()->create([
            'empresa' => 'EMPRESA 1',
            'sector' => 'FINANCIERO',
            'tamano' => 'MEDIANO',
            'asesor_id' => Asesor::where('nombre','ERIKA')->first()->id,
        ]);

        Cliente::factory()->create([
            'empresa' => 'EMPRESA 2',
            'sector' => 'FINANCIERO',
            'tamano' => 'MEDIANO',
            'asesor_id' => Asesor::where('nombre','ERIKA')->first()->id,
        ]);

        Cliente::factory()->create([
            'empresa' => 'EMPRESA 3',
            'sector' => 'FINANCIERO',
            'tamano' => 'MEDIANO',
            'asesor_id' => Asesor::where('nombre','MAURICIO')->first()->id,
        ]);

        Cliente::factory()->create([
            'empresa' => 'EMPRESA 4',
            'sector' => 'SERVICIOS EMPRESARIALES',
            'tamano' => 'PEQUENA',
            'asesor_id' => Asesor::where('nombre','MAURICIO')->first()->id,
        ]);

        Cliente::factory()->create([
            'empresa' => 'EMPRESA 5',
            'sector' => 'SERVICIOS EMPRESARIALES',
            'tamano' => 'GRANDE',
            'asesor_id' => Asesor::where('nombre','ALEJANDRO')->first()->id,
        ]);

        for ($i=0; $i < 6 ; $i++) { 
            Unidad::factory()->create([
                'codigo' => 'LAP-000'.$i,
                'tipo_ua' => 'LAPTOP',
                'marca' => 'HP',
                'procesador' => 'CORE I'.$i,
                'generacion' => '8',
                'cliente_id' => Cliente::all()->random()->id,
            ]);
        }
        


    }
}
