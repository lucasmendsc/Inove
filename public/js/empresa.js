/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/empresa.js ***!
  \*********************************/
window.onload = function () {
  var campoCep = document.querySelector('#cep');
  var cpnj = document.querySelector('#cnpj');
  var email = document.querySelector('#email');
  cpnj.addEventListener('change', function (event) {
    var cnpjValue = cpnj.value;
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/empresa/verificarCnpj",
      data: {
        cnpj: cnpjValue,
        _token: tk
      },
      success: function success(data) {
        var resposta = data;

        if (resposta != 1) {
          document.getElementById("cadastrar").style.display = "none";
          alert("CPNJ já cadastrado,informe um CPNJ novo!");
        } else {
          document.getElementById("cadastrar").style.display = "block";
        }
      }
    });
  });
  email.addEventListener('change', function (event) {
    var emailValue = email.value;
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/empresa/verificarEmail",
      data: {
        email: emailValue,
        _token: tk
      },
      success: function success(data) {
        var resposta = data;

        if (resposta != 1) {
          document.getElementById("cadastrar").style.display = "none";
          alert("E-mail já cadastrado,informe um e-mail novo!");
        } else {
          document.getElementById("cadastrar").style.display = "block";
        }
      }
    });
  });
  campoCep.addEventListener('change', function (event) {
    var cep = campoCep.value;
    var options = {
      method: 'GET',
      mode: 'cors',
      cache: 'default'
    };
    fetch("https://viacep.com.br/ws/".concat(cep, "/json/"), options).then(function (response) {
      response.json().then(function (data) {
        return preencherCampos(data);
      });
    });
  });

  var preencherCampos = function preencherCampos(result) {
    for (var campo in result) {
      if (document.querySelector("#" + campo)) {
        document.querySelector("#" + campo).value = result[campo];
      }
    }
  };

  $("#cadastrar").click(function () {
    var nome = $('#nome').val();
    var razao = $('#razao').val();
    var cnpj = $('#cnpj').val();
    var email = $('#email').val();
    var rua = $('#logradouro').val();
    var bairro = $('#bairro').val();
    var numero = $('#numero').val();
    var complemento = $('#complemento').val();
    var cidade = $('#localidade').val();
    var estado = $('#uf').val();
    var cep = $('#cep').val();
    var telefone = $('#telefone').val();
    var tk = $('#token').val();
    var ativo = document.getElementById('ativo').checked;

    if (ativo) {
      ativo = 1;
    } else {
      ativo = 0;
    }

    $.ajax({
      type: "POST",
      url: "/empresa/adicionar",
      data: {
        nome: nome,
        razao: razao,
        cnpj: cnpj,
        email: email,
        rua: rua,
        bairro: bairro,
        numero: numero,
        complemento: complemento,
        cidade: cidade,
        estado: estado,
        cep: cep,
        telefone: telefone,
        ativo: ativo,
        _token: tk
      },
      success: function success(data) {
        alert("Empresa adicionada com sucesso!");
        window.location.href = "/empresa";
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  });
  $("#editar").click(function () {
    var nome = $('#nome').val();
    var razao = $('#razao').val();
    var cnpj = $('#cnpj').val();
    var email = $('#email').val();
    var rua = $('#logradouro').val();
    var bairro = $('#bairro').val();
    var numero = $('#numero').val();
    var complemento = $('#complemento').val();
    var cidade = $('#localidade').val();
    var estado = $('#uf').val();
    var cep = $('#cep').val();
    var telefone = $('#telefone').val();
    var id = $('#id').val();
    var tk = $('#token').val();
    var ativo = document.getElementById('ativo').checked;

    if (ativo) {
      ativo = 1;
    } else {
      ativo = 0;
    }

    $.ajax({
      type: "POST",
      url: "/empresa/edit",
      data: {
        nome: nome,
        razao: razao,
        cnpj: cnpj,
        email: email,
        rua: rua,
        bairro: bairro,
        numero: numero,
        complemento: complemento,
        cidade: cidade,
        estado: estado,
        cep: cep,
        telefone: telefone,
        ativo: ativo,
        id: id,
        _token: tk
      },
      success: function success(data) {
        alert("Empresa alterada com sucesso!");
        window.location.href = "/empresa";
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  });
};

window.deletarEmpresa = function (idEmpresa) {
  var resultado = confirm("Deseja excluir essa Empresa?");

  if (resultado) {
    $.ajax({
      type: "GET",
      url: "../../empresa/deletar" + idEmpresa,
      success: function success(data) {
        alert("A empresa foi excluída!");
        location.reload();
        return false;
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  }
};
/******/ })()
;