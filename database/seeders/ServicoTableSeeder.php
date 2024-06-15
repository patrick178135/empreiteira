<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Servico;
use Illuminate\Support\Str;
use App\Models\Funcionario;
use Illuminate\Database\Seeder;

class ServicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicos = 20;

        for ($i = 0; $i < $servicos; $i++) {
            $randomFuncionario = Funcionario::inRandomOrder()->first();
            
            Servico::create([
                'descricao' => Str::random(10),
                'preco' => rand(1000, 10000),
                'funcionario_id' => $randomFuncionario->id,
            ]);
        }    
    }
}
