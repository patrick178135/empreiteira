<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    protected $table = 'cidades';
    protected $fillable = ['nome', 'uf'];
}
