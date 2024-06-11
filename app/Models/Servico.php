<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';
    protected $fillable = ['descricao', 'preco', 'funcionario_id'];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }                   
}
