window.onload = function() {

    $("#cadastrar").click(function() {
        let nome = $('#nome').val();
        let empresa = $('#empresa').val();
        let descricao = $('#descricao').val();
        let foto = $('#foto').val();
        let quantidade = $('#quantidade').val();
        let tk = $('#token').val();

        $.ajax({
            type: "POST",
            url: "/produto/adicionar",
            data: {
                nome: nome,
                empresa: empresa,
                descricao: descricao,
                foto: foto,
                quantidade: quantidade,
                _token: tk,
            },
            success: function(data) {
                console.log(data);
            },

            error: function(dataa) {

                console.log(dataa);

            }
        });
    });

}
