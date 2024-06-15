<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cliente;
use Illuminate\Support\Str;
use App\Models\Cidade;
use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = 20;        

        for ($i=0; $i<$clientes; $i++){
            $randomCidade = Cidade::inRandomOrder()->first();

            Cliente::create([
                'nome' => Str::random(10),
                'endereco' => Str::random(10),
                'cidade_id' => $randomCidade->id ,
            ]);
        } 
    }
}
