/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/cliente.js ***!
  \*********************************/
window.onload = function () {
  var urlAtual = window.location.href;

  if (urlAtual.includes("cliente/produto")) {
    if (sessionStorage.getItem("id_logado") == "" || sessionStorage.getItem("id_logado") == null) {
      alert("Voce precisa logar um cliente para estar aqui!");
      window.location.href = "/cliente";
    }
  }

  $("#cadastrar").click(function () {
    var nome = $('#nome').val();
    var email = $('#email').val();
    var cpf = $('#cpf').val();
    var senha = $('#senha').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "adicionar",
      data: {
        _token: tk,
        nome: nome,
        email: email,
        cpf: cpf,
        senha: senha
      },
      success: function success(data) {
        alert("Cliente cadastrado com sucesso!");
        window.location.href = "/cliente";
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
      url: "edit",
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
        alert("Cliente alterado com sucesso!");
        window.location.href = "/cliente";
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
          sessionStorage.setItem("id_logado", data['id']);
          sessionStorage.setItem("saldo_logado", parseInt(data['saldo']));
          setTimeout(function () {
            window.location.href = "../../cliente/produtos";
          }, 500);
        } else {
          alert("Cliente nao encontrado! Revise suas credenciais.");
        }
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  });
};

window.deslogar = function () {
  sessionStorage.setItem("id_logado", "");
  sessionStorage.setItem("saldo_logado", 0);
  setTimeout(function () {
    window.location.href = "../dashboard";
  }, 500);
};

window.deletarCliente = function (idCliente) {
  var resultado = confirm("Deseja excluir esse cliente?");

  if (resultado) {
    $.ajax({
      type: "GET",
      url: "../../cliente/deletar" + idCliente,
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

window.alterarCliente = function (idCliente) {
  if (resultado) {
    $.ajax({
      type: "GET",
      url: "../../cliente/deletar" + idCliente,
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
  var quantidadeDesejada = prompt("Digite a quantidade desejada:");

  if (quantidadeDesejada > quantidadeProduto) {
    alert("Quantidade desejada maior que a disponível!");
  } else {
    var idCliente = sessionStorage.getItem("id_logado");
    var saldoCliente = sessionStorage.getItem("saldo_logado");
    var tk = $('#token').val();

    if (quantidadeDesejada > parseInt(saldoCliente)) {
      alert("Quantidade maior que saldo! Revise seu pedido.");
    } else {
      $.ajax({
        type: "POST",
        url: "../../transacao/adicionar",
        data: {
          _token: tk,
          id_produto: idProduto,
          id_cliente: idCliente,
          quantidade: quantidadeDesejada
        },
        success: function success(data) {
          alert("Transaçao efetuada com sucesso! Email enviado!");
          sessionStorage.setItem("saldo_logado", parseInt(saldoCliente - quantidadeDesejada));
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