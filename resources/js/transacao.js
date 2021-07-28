window.onload = function() {
    $(function() {
        $("#dataInicial").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#dataFinal").datepicker({ dateFormat: 'yy-mm-dd' });
    });
}
window.filtrarData = function() {
    let dataInicial = $('#dataInicial').val();
    let dataFinal = $('#dataFinal').val();
    window.location.href = "/transacao/filtrar" + dataInicial + "/" + dataFinal;
}