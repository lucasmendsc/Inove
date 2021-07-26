@extends('default.layout')
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="../img/logo.jpg">
                    <script type="text/javascript" src="../js/produto.js"></script>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Register</h4>
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input id="descricao" type="text" class="form-control" name="descricao" required
                                    autofocus>
                            </div>

                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <input id="empresa" type="text" class="form-control" name="empresa" required>
                            </div>

                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input id="quantidade" type="text" class="form-control" name="quantidade" required
                                    data-eye>
                            </div>

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="form-group m-0">
                                <div id="cadastrar" class="btn btn-primary btn-block">
                                    Registrar
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
