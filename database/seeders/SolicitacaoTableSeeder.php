<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Solicitacao;
use App\Models\Servico;
use App\Models\Contrato;
use Illuminate\Database\Seeder;

class SolicitacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $solicitacoes = 20;

        for ($i = 0; $i < $solicitacoes; $i++) {
            $randomServico = Servico::inRandomOrder()->first();
            $randomContrato = Contrato::inRandomOrder()->first();

            
            Solicitacao::create([
                'preco_final' => rand(1000, 10000),
                'servico_id' => $randomServico->id,
                'contrato_id' => $randomContrato->id,
            ]);
        }     }
}
