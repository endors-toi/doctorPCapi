<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Propietario;
use App\Models\Computador;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $computadoras = [];
        $computadoras[0] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'HP',
            'anio' => now()->subYears(rand(1, 10)),
        ]);
        $computadoras[1] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'Lenovo',
            'anio' => now()->subYears(rand(1, 10)),
        ]);
        $computadoras[2] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'Apple',
            'anio' => now()->subYears(rand(1, 10)),
        ]);
        $computadoras[3] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'Toshiba',
            'anio' => now()->subYears(rand(1, 10)),
        ]);
        $computadoras[4] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'Dell',
            'anio' => now()->subYears(rand(1, 10)),
        ]);
        $computadoras[5] = Computador::create([
            'precio' => rand(500, 5000),
            'marca' => 'Asus',
            'anio' => now()->subYears(rand(1, 10)),
        ]);

        foreach ($computadoras as $computador) {
            Propietario::create([
                'nombreApellido' => $faker->name(),
                'id_computadora' => $computador->id,
            ]);
        }
    }
}


