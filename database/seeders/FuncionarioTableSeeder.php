<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Funcionario;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcionarios = 20;

        for ($i=0; $i<$funcionarios; $i++){
            Funcionario::create([
                'nome' => Str::random(10),
                'funcao' => Str::random(10),
            ]);
        } 
    }
}
