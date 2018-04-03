<?php
/**
 * Created by PhpStorm.
 * User: nayra
 * Date: 03/04/18
 * Time: 14:40
 */

namespace App\Services;

use App\Models\Pessoa;

class PessoaService
{
    public function listarPessoas($params = null)
    {
        return Pessoa::all();
    }
}