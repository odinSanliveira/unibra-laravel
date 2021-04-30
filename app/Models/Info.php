<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{   //criando model de Info
    protected $fillable = [
        'cnpj',
        'nome',
        'razaoSocial',
        'data_abertura',
        'capital_social',
        'tipo',
        'nat_juridica',
        'porte',
        'qtdFuncionarios',
        'faturamento',
        'telefone',
        'email',
        'estado',
        'municipio',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'Atv_economica'
        
    ];
}
