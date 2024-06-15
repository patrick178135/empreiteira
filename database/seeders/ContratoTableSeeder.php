<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contrato;
use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratos = 20;

        for ($i = 0; $i < $contratos; $i++) {
            $randomCliente = Cliente::inRandomOrder()->first();
            
            $data = Carbon::now()->addDays(rand(1, 365))->format('Y-m-d');

            Contrato::create([
                'data' => $data,
                'valor_total' => rand(1000, 10000),
                'cliente_id' => $randomCliente->id,
            ]);
        }
    }
}
