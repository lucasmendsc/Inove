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

    $("#editar").click(function() {
        let nome = $('#nome').val();
        let empresa = $('#empresa').val();
        let descricao = $('#descricao').val();
        let foto = $('#foto').val();
        let quantidade = $('#quantidade').val();
        let id = $('#id').val();
        let tk = $('#token').val();

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

window.deletarProduto = function(idProduto) {
    var resultado = confirm("Deseja excluir esse Produto?");
    if (resultado) {
        $.ajax({
            type: "GET",
            url: "/produto/deletar" + idProduto,
            success: function(data) {
                alert("O produto foi excluído!");
                location.reload();
                return false;
            },

            error: function(dataa) {

                console.log(dataa);

            }
        });
    }
}