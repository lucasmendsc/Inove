@extends('default.layout')
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="img/logo.jpg" alt="bootstrap 4 login page">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Logar</h4>
                        <form>
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">
                                    Your email is invalid
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="senha">Password</label>
                                <input id="senha" type="password" class="form-control" name="password" required
                                    data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="form-group m-0">
                                <div id="logar" class="btn btn-primary btn-block">
                                    Login
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2021 &mdash; <a href="https://after.sale/">After Sale</a>
                </div>
            </div>
        </div>
    </div>
</section>
