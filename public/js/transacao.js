/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/transacao.js ***!
  \***********************************/
window.onload = function () {
  $(function () {
    $("#dataInicial").datepicker({
      dateFormat: 'yy-mm-dd'
    });
    $("#dataFinal").datepicker({
      dateFormat: 'yy-mm-dd'
    });
  });
};

window.filtrarData = function () {
  var dataInicial = $('#dataInicial').val();
  var dataFinal = $('#dataFinal').val();
  window.location.href = "/transacao/filtrar" + dataInicial + "/" + dataFinal;
};
/******/ })()
;