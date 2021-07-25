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