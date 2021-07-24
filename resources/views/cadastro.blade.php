
@extends('default.layout')
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo.jpg">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form>
                                <div class="form-group">
                                    <label for="nome">Name</label>
                                    <input id="nome" type="text" class="form-control" name="name" required autofocus>
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>

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

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input"
                                            required="">
                                        <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms
                                                and Conditions</a></label>
                                        <div class="invalid-feedback">
                                            You must agree with our Terms and Conditions
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="form-group m-0">
                                    <div id="cadastrar" class="btn btn-primary btn-block">
                                        Register
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    Already have an account? <a href="/login">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2021 &mdash; <a href="https://inovedados.com.br/" target="_blank">Inove</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
