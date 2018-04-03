<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'ds_nome',
        'ds_nome_social',
        'tp_sexo',
        'dt_nascimento',
    ];
}
