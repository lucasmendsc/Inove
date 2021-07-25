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
    var cnpjj = cpnj.value;
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/empresa/verificarCnpj",
      data: {
        cnpj: cnpjj,
        _token: tk
      },
      success: function success(data) {
        console.log(data);
      },
      error: function error(dataa) {
        console.log(dataa);
      }
    });
  });
  email.addEventListener('change', function (event) {});
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
        _token: tk
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
/******/ })()
;