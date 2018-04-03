<?php

namespace App\Http\Controllers\Pessoa;

use App\Models\Pessoa;
use App\Services\PessoaService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class PessoaController extends Controller
{
    public function index(PessoaService $pessoaService)
    {
        $arrPessoas = $pessoaService->listarPessoas();
        return view('pessoa.index',['pessoas' => $arrPessoas]);
    }

    public function cadastrarForm(){
        return view('pessoa.cadastro');
    }

    public function salvar(Request $request, $id = null){

        try{
            if(!is_null($id)){
                $objPessoa = Pessoa::find($id);
                $objPessoa->fill($request->all());
                $objPessoa->save();

            }else{
                Pessoa::create($request->all());
            }
            $msg = 'Pessoa salva com sucesso!';


        }catch (\Exception $ex){
            $msg = 'Ocorreu um erro durante a operação. Tente novamente.';
            echo $ex->getMessage();
        }

        return redirect('pessoa')->with('status', $msg);;

    }

    public function visualizar($id){
        $objPessoa = Pessoa::find($id);
        return view('pessoa.editar',['pessoa' => $objPessoa]);
    }
}
