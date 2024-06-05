<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'dataFundacao',
        'numeroEdificios',
        'numeroApartamentos',
        'sindico',
        'telefoneSindico',
        'emailSindico',
        'taxaCondominio',
    ];
}
