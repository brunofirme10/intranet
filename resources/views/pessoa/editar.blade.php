@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de pessoa</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form role="form" method="POST" action="/pessoa/editar/{{$pessoa->id}}"
                                  id="form_editar_usuario" name="form_editar_usuario">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}

                                <div class="panel-body">
                                    <div class="col-md-12 espacamento-input">
                                        <div class="col-md-12">
                                            <label for="ds_nome" class="col-md-3 control-label">
                                                Nome:
                                            </label>
                                            <div class="col-md-9">
                                                <input id="ds_nome" type="text" class="form-control"
                                                       name="ds_nome" required="true" value="{{$pessoa->ds_nome}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12 espacamento-input">
                                            <label for="ds_nome_social" class="col-md-3 control-label">
                                                Nome Social:
                                            </label>
                                            <div class="col-md-9">
                                                <input id="ds_nome_social" type="text" class="form-control"
                                                       name="ds_nome_social" required="true" value="{{$pessoa->ds_nome_social}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12 espacamento-input">
                                            <label for="dt_nascimento" class="col-md-3 control-label">
                                                Data nascimento:
                                            </label>
                                            <div class="col-md-9">
                                                <input id="dt_nascimento" type="text" class="form-control"
                                                       name="dt_nascimento" required="true" value="{{$pessoa->dt_nascimento}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="col-md-12 espacamento-input">
                                            <label for="tp_sexo" class="col-md-3 control-label">
                                                Sexo:
                                            </label>
                                            <div class="col-md-9">
                                                <select id="tp_sexo" type="text" class="form-control"
                                                        name="tp_sexo" required="true" value="{{$pessoa->tp_sexo}}">
                                                    <option value="F"
                                                            @if ($pessoa->tp_sexo == 'F')
                                                            selected="selected"
                                                            @endif>
                                                        Feminino
                                                    </option>
                                                    <option value="M"
                                                            @if ($pessoa->tp_sexo == 'M')
                                                            selected="selected"
                                                            @endif
                                                    >
                                                        Masculino
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div style="text-align: right;">
                                    <button type="submit" class="btn btn-success" style="pedding-top:10px;">Salvar</button>
                                    <a type="button" class="btn btn-warning" id="botaoVoltar" data-dismiss="modal" href="/pessoa">Voltar</a>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
