@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de pessoas</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-info grupo-btn" href="pessoa/cadastro">Adicionar Pessoa</a>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>#</td>
                                <td>Nome</td>
                                <td>Nome Social</td>
                                <td>Sexo</td>
                                <td>Data nascimento</td>
                                <td>Ações</td>
                            </tr>
                            @foreach($pessoas as $pessoa)
                                <tr>
                                    <td>{{$pessoa->id}}</td>
                                    <td>{{$pessoa->ds_nome}}</td>
                                    <td>{{$pessoa->ds_nome_social}}</td>
                                    <td>{{$pessoa->tp_sexo}}</td>
                                    <td>{{$pessoa->dt_nascimento}}</td>
                                    <td><a href="/pessoa/visualizar/{{$pessoa->id}}">Editar</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
