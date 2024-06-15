<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = 20;

        for ($i=0; $i<$cidades; $i++){
            Cidade::create([
                'nome' => Str::random(6),
                'uf' => Str::random(2),
            ]);
        } 
    }
}
