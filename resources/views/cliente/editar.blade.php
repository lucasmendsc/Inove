@extends('default.layout')
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="../img/logo.jpg">
                    <script type="text/javascript" src="../js/cliente.js"></script>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Register</h4>
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" type="text" class="form-control" name="nome" value="{{$clientes[0]->nome}}" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o seu nome?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input id="cpf" type="text" class="form-control" name="cpf" value="{{$clientes[0]->cpf}}" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o seu CPF?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{$clientes[0]->email}}" required>
                                <div class="invalid-feedback">
                                    E-mail inválido
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input id="senha" type="senha" class="form-control" name="senha" value="{{$clientes[0]->senha}}" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="saldo">Saldo</label>
                                <input id="saldo" type="number" class="form-control" name="saldo" value="{{$clientes[0]->saldo}}" required data-eye>
                            </div>

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" id="id" value="{{$clientes[0]->id}}">
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
