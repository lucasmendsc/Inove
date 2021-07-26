/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/cliente.js ***!
  \*********************************/
window.onload = function () {
  $("#cadastrar").click(function () {
    var nome = $('#nome').val();
    var email = $('#email').val();
    var cpf = $('#cpf').val();
    var senha = $('#senha').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/cliente/adicionar",
      data: {
        _token: tk,
        nome: nome,
        email: email,
        cpf: cpf,
        senha: senha
      },
      success: function success(data) {
        console.log(data);
      }
    });
  });
  $("#editar").click(function () {
    var nome = $('#nome').val();
    var email = $('#email').val();
    var cpf = $('#cpf').val();
    var senha = $('#senha').val();
    var saldo = $('#saldo').val();
    var id = $('#id').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/cliente/edit",
      data: {
        _token: tk,
        id: id,
        nome: nome,
        email: email,
        cpf: cpf,
        senha: senha,
        saldo: saldo
      },
      success: function success(data) {
        console.log(data);
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  });
  $("#logar").click(function () {
    var email = $('#email').val();
    var senha = $('#senha').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/cliente/logar",
      data: {
        _token: tk,
        email: email,
        senha: senha
      },
      success: function success(data) {
        if (data) {
          sessionStorage.setItem("id_cliente", data);
        }
      }
    });
  });

  function deslogar() {
    sessionStorage.setItem("id_cliente", "");
  }
};
/******/ })()
;