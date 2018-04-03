<?php

namespace App\Http\Controllers\Pessoa;

use App\Services\PessoaService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaController extends Controller
{
    public function index(PessoaService $pessoaService)
    {
        $arrPessoas = $pessoaService->listarPessoas();
        return view(
            'pessoa.index',
            [
                'pessoas' => $arrPessoas,
            ]
        );
    }
}
