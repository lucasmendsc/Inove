@extends('default.layout')
<section class="h-100">
    <a href="../empresa">Back</a>
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="../img/logo.jpg">
                    <script type="text/javascript" src="../js/empresa.js"></script>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Editar</h4>
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" type="text" class="form-control" name="nome"
                                    value="{{ $empresas[0]->nome }}" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o nome da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="razao">Razão Social</label>
                                <input id="razao" type="text" class="form-control" name="razao"
                                    value="{{ $empresas[0]->razao }}" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o nome da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpnj">CNPJ</label>
                                <input id="cnpj" type="text" class="form-control" name="cnpj"
                                    value="{{ $empresas[0]->cnpj }}" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o CNPJ da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ $empresas[0]->email }}" required>
                                <div class="invalid-feedback">
                                    E-mail inválido
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input id="telefone" type="text" class="form-control" name="telefone"
                                    value="{{ $empresas[0]->telefone }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input id="cep" type="text" class="form-control" name="cep"
                                    value="{{ $empresas[0]->cep }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input id="logradouro" type="text" class="form-control" name="logradouro"
                                    value="{{ $empresas[0]->rua }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input id="bairro" type="text" class="form-control" name="bairro"
                                    value="{{ $empresas[0]->bairro }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input id="numero" type="text" class="form-control" name="numero"
                                    value="{{ $empresas[0]->numero }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input id="complemento" type="text" class="form-control" name="complemento"
                                    value="{{ $empresas[0]->complemento }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="localidade">Cidade</label>
                                <input id="localidade" type="text" class="form-control" name="localidade"
                                    value="{{ $empresas[0]->cidade }}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="uf">Estado</label>
                                <input id="uf" type="text" class="form-control" name="uf"
                                    value="{{ $empresas[0]->estado }}" required data-eye>
                            </div>

                            @if ($empresas[0]->ativo)
                                <input id="ativo" type="checkbox" checked data-toggle="toggle" data-on="Ativa"
                                    data-off="Inativa" data-onstyle="success" data-offstyle="danger">
                            @else
                                <input id="ativo" type="checkbox" data-toggle="toggle" data-on="Ativa"
                                    data-off="Inativa" data-onstyle="success" data-offstyle="danger">
                            @endif

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" id="id" value="{{ $empresas[0]->id }}">
                            <div class="form-group m-0">
                                <div id="editar" class="btn btn-primary btn-block">
                                    Editar
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2021 &mdash; <a href="https://inovedados.com.br/" target="_blank">Inove Dados</a>
                </div>
            </div>
        </div>
    </div>
</section>
