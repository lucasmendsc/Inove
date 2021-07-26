/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/produto.js ***!
  \*********************************/
window.onload = function () {
  $("#cadastrar").click(function () {
    var nome = $('#nome').val();
    var empresa = $('#empresa').val();
    var descricao = $('#descricao').val();
    var foto = $('#foto').val();
    var quantidade = $('#quantidade').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/produto/adicionar",
      data: {
        nome: nome,
        empresa: empresa,
        descricao: descricao,
        foto: foto,
        quantidade: quantidade,
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
  $("#editar").click(function () {
    var nome = $('#nome').val();
    var empresa = $('#empresa').val();
    var descricao = $('#descricao').val();
    var foto = $('#foto').val();
    var quantidade = $('#quantidade').val();
    var id = $('#id').val();
    var tk = $('#token').val();
    $.ajax({
      type: "POST",
      url: "/produto/edit",
      data: {
        nome: nome,
        id_empresa: empresa,
        descricao: descricao,
        foto: foto,
        quantidade: quantidade,
        id: id,
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