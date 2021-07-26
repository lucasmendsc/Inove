@extends('default.layout')
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="../img/logo.jpg">
                    <script type="text/javascript" src="../js/empresa.js"></script>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Register</h4>
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o nome da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="razao">Razão Social</label>
                                <input id="razao" type="text" class="form-control" name="razao" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o nome da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpnj">CNPJ</label>
                                <input id="cnpj" type="text" class="form-control" name="cnpj" required autofocus>
                                <div class="invalid-feedback">
                                    Qual é o CNPJ da sua empresa?
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">
                                    E-mail inválido
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input id="telefone" type="text" class="form-control" name="telefone" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input id="cep" type="text" class="form-control" name="cep" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input id="logradouro" type="text" class="form-control" name="logradouro" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input id="bairro" type="text" class="form-control" name="bairro" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input id="numero" type="text" class="form-control" name="numero" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input id="complemento" type="text" class="form-control" name="complemento" required
                                    data-eye>
                            </div>

                            <div class="form-group">
                                <label for="localidade">Cidade</label>
                                <input id="localidade" type="text" class="form-control" name="localidade" required data-eye>
                            </div>

                            <div class="form-group">
                                <label for="uf">Estado</label>
                                <input id="uf" type="text" class="form-control" name="uf" required data-eye>
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
