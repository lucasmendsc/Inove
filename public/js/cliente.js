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
};

window.deletarCliente = function (idCliente) {
  var resultado = confirm("Deseja excluir esse cliente?");

  if (resultado) {
    $.ajax({
      type: "GET",
      url: "/cliente/deletar" + idCliente,
      success: function success(data) {
        alert("O cliente foi excluído!");
        location.reload();
        return false;
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  }
};

window.comprar = function (idProduto, quantidadeProduto) {
  var quantidade = prompt("Digite a quantidade desejada:");

  if (quantidade > quantidadeProduto) {
    alert("Quantidade desejada maior que a disponível!");
  } else {
    var idCliente = sessionStorage.getItem("id_logado");
    var saldoCliente = sessionStorage.getItem("saldo_logado");
    var tk = $('#token').val();

    if (quantidade > saldoCliente) {
      alert("Quantidade maior que saldo! Revise seu pedido.");
    } else {
      $.ajax({
        type: "POST",
        url: "/transacao/adicionar",
        data: {
          _token: tk,
          id_produto: idProduto,
          id_cliente: idCliente,
          quantidade: quantidade
        },
        success: function success(data) {
          alert("Transaçao efetuada com sucesso!");
          sessionStorage.setItem("saldo_logado", parseInt(saldoCliente - quantidade));
          location.reload();
        },
        error: function error(dataa) {
          console.log(dataa);
        }
      });
    }
  }
};
/******/ })()
;