<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
    protected $fillable = ['data', 'valor_total', 'cliente_id'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
