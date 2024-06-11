<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';
    protected $fillable = ['preco_final','contrato_id','servico_id'];

    public function contrato(){
        return $this->belongsTo(Contrato::class);
    }

    public function servico(){
        return $this->belongsTo(Servico::class);
    }
}
